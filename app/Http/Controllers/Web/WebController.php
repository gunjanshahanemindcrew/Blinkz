<?php

namespace App\Http\Controllers\Web;

use App\CPU\Helpers;
use App\CPU\OrderManager;
use App\CPU\ProductManager;
use App\Http\Controllers\Controller;
use App\Mail\CampInquiery;
use App\Model\Brand;
use App\Model\BusinessSetting;
use App\Model\Category;
use App\Model\DealOfTheDay;
use App\Model\FlashDeal;
use App\Model\FlashDealProduct;
use App\Model\HelpTopic;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\Review;
use App\Model\Shop;
use App\Model\Wishlist;
use App\Model\CampInquiries;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home()
    {
        $featured_products = Product::with(['reviews'])->active()->where('featured_status', 1)->take(8)->get();
        $random_products = Product::with(['reviews'])->active()->inRandomOrder()->take(8)->get();
        $latest_products = Product::with(['reviews'])->active()->orderBy('id', 'desc')->take(6)->get();
        $categories = Category::with(['childes.childes'])->where('position', 0)->take(12)->get();
        $brands = Brand::take(12)->get();
        //best sell product
        $bestSellProduct = OrderDetail::with('product.reviews')
            ->select('product_id', DB::raw('COUNT(product_id) as count'))
            ->groupBy('product_id')
            ->orderBy("count", 'desc')
            ->take(4)
            ->get();
        // dd($bestSellProduct);
        //Top rated
        $topRated = Review::with('product')
            ->select('product_id', DB::raw('AVG(rating) as count'))
            ->groupBy('product_id')
            ->orderBy("count", 'desc')
            ->take(4)
            ->get();

        if ($bestSellProduct->count() == 0) {
            $bestSellProduct = $latest_products;
        }

        if ($topRated->count() == 0) {
            $topRated = $bestSellProduct;
        }

        $deal_of_the_day = DealOfTheDay::join('products', 'products.id', '=', 'deal_of_the_days.product_id')->select('deal_of_the_days.*', 'products.unit_price')->where('deal_of_the_days.status', 1)->first();

        return view('web-views.home', compact('featured_products', 'random_products', 'topRated', 'bestSellProduct', 'latest_products', 'categories', 'brands', 'deal_of_the_day'));
    }

    public function flash_deals($id)
    {
        $deal = FlashDeal::with(['products.product.reviews'])->where(['id' => $id, 'status' => 1])->whereDate('start_date', '<=', date('Y-m-d'))->whereDate('end_date', '>=', date('Y-m-d'))->first();

        $discountPrice = FlashDealProduct::with(['product'])->get()->map(function ($data) {
            return [
                'discount' => $data->discount,
                'sellPrice' => $data->product->unit_price,
                'discountedPrice' => $data->product->unit_price - $data->discount,

            ];
        })->toArray();
        // dd($deal->toArray());

        if (isset($deal)) {
            return view('web-views.deals', compact('deal', 'discountPrice'));
        }
        Toastr::warning('no such deal found!');
        return back();
    }

    public function all_categories()
    {
        $categories = Category::all();
        return view('web-views.categories', compact('categories'));
    }

    public function categories_by_category($id)
    {
        $category = Category::with(['childes.childes'])->where('id', $id)->first();
        return response()->json([
            'view' => view('web-views.partials._category-list-ajax', compact('category'))->render(),
        ]);
    }

    public function all_brands()
    {
        $brands = Brand::paginate(12);
        return view('web-views.brands', compact('brands'));
    }

    public function searched_products(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Product name is required!',
        ]);

        $result = ProductManager::search_products($request['name']);
        $products = $result['products'];

        return response()->json([
            'result' => view('web-views.partials._search-result', compact('products'))->render(),
        ]);
    }

    public function checkout_details()
    {
        if (session()->has('shipping_method_id') == false) {
            Toastr::info('Select shipping method first!');
            return redirect('shop-cart');
        }

        if (session()->has('cart') && count(session('cart')) > 0) {
            return view('web-views.checkout-details');
        }
        Toastr::info('No items in your basket!');
        return redirect('/');
    }

    public function checkout_shipping(Request $request)
    {
        if (session()->has('shipping_method_id') == false) {
            Toastr::info('Select shipping method first!');
            return redirect('shop-cart');
        }

        if (session()->has('cart') && count(session('cart')) > 0) {
            return view('web-views.checkout-shipping');
        }
        Toastr::info('No items in your basket!');
        return redirect('/');
    }

    public function checkout_payment()
    {
        if (session()->has('shipping_method_id') == false) {
            Toastr::info('Select shipping method first!');
            return redirect('shop-cart');
        }

        if (session()->has('customer_info') && session()->has('cart') && count(session('cart')) > 0) {
            return view('web-views.checkout-payment');
        }

        Toastr::error('Incomplete info!');
        return back();
    }

    public function checkout_review()
    {
        if (session()->has('shipping_method_id') == false) {
            Toastr::info('Select shipping method first!');
            return redirect('shop-cart');
        }

        if (session()->has('customer_info') == false) {
            Toastr::error('Incomplete info!');
            return back();
        }

        if (session()->has('payment_method') == false) {
            session()->put('payment_method', 'cash_on_delivery');
        }

        if (session()->has('cart') && count(session('cart')) > 0) {
            $data = session('customer_info');
            if (session()->has('payment_method') == false || session('payment_method') == null) {
                session()->put('payment_method', 'cash_on_delivery');
            }
            return view('web-views.checkout-review', compact('data'));
        }
        Toastr::info('No items in your basket!');
        return redirect('/');
    }

    public function checkout_complete()
    {
        if (session()->has('shipping_method_id') == false) {
            Toastr::info('Select shipping method first!');
            return redirect('shop-cart');
        }

        if (session()->has('cart') == false || count(session('cart')) == 0) {
            Toastr::info('Your cart is empty.');
            return redirect()->route('home');
        }

        $discount = session()->has('coupon_discount') ? session('coupon_discount') : 0;

        $order_id = OrderManager::place_order(
            auth('customer')->id(),
            auth('customer')->user()->email,
            session('customer_info'),
            session('cart'),
            session('payment_method'),
            $discount);

        /*$basic  = new \Nexmo\Client\Credentials\Basic('6be2b056', 'alwtNgoV2K0HQwxc');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
        'to' => '8801759412381',
        'from' => 'Sixamtech',
        'text' => 'Hello from Sixamtech.com'
        ]);*/

        session()->forget('cart');
        session()->forget('coupon_code');
        session()->forget('coupon_discount');
        session()->forget('payment_method');
        session()->forget('customer_info');
        session()->forget('shipping_method_id');

        return view('web-views.checkout-complete', compact('order_id'));
    }

    public function shop_cart()
    {
        if (session()->has('cart') && count(session('cart')) > 0) {
            return view('web-views.shop-cart');
        }
        Toastr::info('No items in your basket!');
        return redirect('/');
    }

    //for seller Shop

    public function seller_shop(Request $request, $id)
    {
        $products = Product::active()->with('shop')->where(['added_by' => 'seller'])
            ->where('user_id', $id)
            ->paginate(12);
        $shop = Shop::where('seller_id', $id)->first();
        if ($request['sort_by'] == null) {
            $request['sort_by'] = 'latest';
        }

        return view('web-views.shop-page', compact('products', 'shop'));
    }

    public function quick_view(Request $request)
    {
        $product = ProductManager::get_product($request->product_id);
        $order_details = OrderDetail::where('product_id', $product->id)->get();
        $wishlists = Wishlist::where('product_id', $product->id)->get();
        $countOrder = count($order_details);
        $countWishlist = count($wishlists);
        $relatedProducts = Product::with(['reviews'])->where('category_ids', $product->category_ids)->where('id', '!=', $product->id)->limit(12)->get();
        return response()->json([
            'success' => 1,
            'view' => view('web-views.partials._quick-view-data', compact('product', 'countWishlist', 'countOrder', 'relatedProducts'))->render(),
        ]);
    }

    public function product($slug)
    {
        $product = Product::active()->with(['reviews'])->where('slug', $slug)->first();
        if ($product != null) {
            $countOrder = OrderDetail::where('product_id', $product->id)->count();
            $countWishlist = Wishlist::where('product_id', $product->id)->count();
            $relatedProducts = Product::with(['reviews'])->active()->where('category_ids', $product->category_ids)->where('id', '!=', $product->id)->limit(12)->get();
            $deal_of_the_day = DealOfTheDay::where('product_id', $product->id)->where('status', 1)->first();

            return view('web-views.products.details', compact('product', 'countWishlist', 'countOrder', 'relatedProducts', 'deal_of_the_day'));
        }

        Toastr::error('Product not found!');
        return back();
    }

    public function products(Request $request)
    {
        if ($request['sort_by'] == null) {
            $request['sort_by'] = 'latest';
        }

        if ($request['data_from'] == 'category') {
            $products = Product::active()->get();
            $product_ids = [];
            foreach ($products as $product) {
                foreach (json_decode($product['category_ids'], true) as $category) {
                    if ($category['id'] == $request['id']) {
                        array_push($product_ids, $product['id']);
                    }
                }
            }

            $query = Product::with(['reviews'])->whereIn('id', $product_ids);
            if ($request['sort_by'] == 'latest') {
                $fetched = $query->latest();
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }
        }

        if ($request['data_from'] == 'brand') {
            $query = Product::with(['reviews'])->active()->where('brand_id', $request['id']);
            if ($request['sort_by'] == 'latest') {
                $fetched = $query->latest();
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }

        }

        if ($request['data_from'] == 'latest') {
            $query = Product::with(['reviews'])->active()->orderBy('id', 'DESC');
            // dd($query->toArray());
            if ($request['sort_by'] == 'latest') {
                $fetched = $query;
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }
        }

        if ($request['data_from'] == 'top-rated') {
            $reviews = Review::select('product_id', DB::raw('AVG(rating) as count'))
                ->groupBy('product_id')
                ->orderBy("count", 'desc')->get();
            $product_ids = [];
            foreach ($reviews as $review) {
                array_push($product_ids, $review['product_id']);
            }
            $query = Product::with(['reviews'])->whereIn('id', $product_ids);

            if ($request['sort_by'] == 'latest') {
                $fetched = $query;
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }
        }

        if ($request['data_from'] == 'best-selling') {
            $details = OrderDetail::with('product')
                ->select('product_id', DB::raw('COUNT(product_id) as count'))
                ->groupBy('product_id')
                ->orderBy("count", 'desc')
                ->get();
            $product_ids = [];
            foreach ($details as $detail) {
                array_push($product_ids, $detail['product_id']);
            }
            $query = Product::with(['reviews'])->active()->whereIn('id', $product_ids);

            if ($request['sort_by'] == 'latest') {
                $fetched = $query;
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }
        }

        if ($request['data_from'] == 'featured') {
            $query = Product::with(['reviews'])->active()->where('featured', 1);
            if ($request['sort_by'] == 'latest') {
                $fetched = $query->latest();
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }
        }

        if ($request['data_from'] == 'search') {
            $key = explode(' ', $request['name']);
            $query = Product::with(['reviews'])->active()->where(function ($q) use ($key) {
                foreach ($key as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
                }
            });

            if ($request['sort_by'] == 'latest') {
                $fetched = $query->latest();
            } elseif ($request['sort_by'] == 'low-high') {
                $fetched = $query->orderBy('unit_price', 'ASC');
            } elseif ($request['sort_by'] == 'high-low') {
                $fetched = $query->orderBy('unit_price', 'DESC');
            } elseif ($request['sort_by'] == 'a-z') {
                $fetched = $query->orderBy('name', 'ASC');
            } elseif ($request['sort_by'] == 'z-a') {
                $fetched = $query->orderBy('name', 'DESC');
            } else {
                $fetched = $query;
            }
        }

        if ($request['min_price'] != null || $request['max_price'] != null) {
            $fetched = $fetched->whereBetween('unit_price', [Helpers::convert_currency_to_usd($request['min_price']), Helpers::convert_currency_to_usd($request['max_price'])]);
        }

        $products = $fetched->paginate(9);

        $data = [
            'id' => $request['id'],
            'name' => $request['name'],
            'data_from' => $request['data_from'],
            'sort_by' => $request['sort_by'],
            'page_no' => $request['page'],
            'min_price' => $request['min_price'],
            'max_price' => $request['max_price'],
            'page_number' => $products->lastPage(),
        ];

        if ($request->ajax()) {
            $page = $request['page'];
            return response()->json([
                'view' => view('web-views.products._ajax-products', compact('products'))->render(),
                'paginator' => view('web-views.products._ajax-paginator', compact('data', 'page'))->render(),
            ], 200);
        }
        if ($request['data_from'] == 'category') {
            $data['brand_name'] = Category::find((int)$request['id'])->name;
        }
        if ($request['data_from'] == 'brand') {
            $data['brand_name'] = Brand::find((int)$request['id'])->name;
        }

        return view('web-views.products.view', compact('products', 'data'), $data);
    }

    public function viewWishlist()
    {
        $wishlists = Wishlist::where('customer_id', auth('customer')->id())->get();
        return view('web-views.users-profile.account-wishlist', compact('wishlists'));
    }

    public function storeWishlist(Request $request)
    {
        if ($request->ajax()) {
            if (auth('customer')->check()) {
                $wishlist = Wishlist::where('customer_id', auth('customer')->id())->where('product_id', $request->product_id)->first();
                if (empty($wishlist)) {

                    $wishlist = new Wishlist;
                    $wishlist->customer_id = auth('customer')->id();
                    $wishlist->product_id = $request->product_id;
                    $wishlist->save();

                    $countWishlist = Wishlist::where('customer_id', auth('customer')->id())->get();
                    $data = "Product has been added to wishlist";

                    $product_count = Wishlist::where(['product_id' => $request->product_id])->count();
                    session()->put('wish_list', Wishlist::where('customer_id', auth('customer')->user()->id)->pluck('product_id')->toArray());
                    return response()->json(['success' => $data, 'value' => 1, 'count' => count($countWishlist), 'id' => $request->product_id, 'product_count' => $product_count]);
                } else {
                    $data = "Product already added to wishlist";
                    return response()->json(['error' => $data, 'value' => 2]);
                }

            } else {
                $data = "Please login first";
                return response()->json(['error' => $data, 'value' => 0]);
            }
        }
    }

    public function deleteWishlist(Request $request)
    {
        Wishlist::where(['product_id' => $request['id'], 'customer_id' => auth('customer')->id()])->delete();
        $data = "Product has been remove from wishlist!";
        $wishlists = Wishlist::where('customer_id', auth('customer')->id())->get();
        session()->put('wish_list', Wishlist::where('customer_id', auth('customer')->user()->id)->pluck('product_id')->toArray());
        return response()->json([
            'success' => $data,
            'count' => count($wishlists),
            'id' => $request->id,
            'wishlist' => view('web-views.partials._wish-list-data', compact('wishlists'))->render(),
        ]);
    }

    //for HelpTopic
    public function helpTopic()
    {
        $helps = HelpTopic::Status()->latest()->get();
        return view('web-views.help-topics', compact('helps'));
    }

    //for Contact US Page
    public function contacts()
    {

        return view('web-views.contacts');
    }

    public function about_us()
    {
        $about_us = BusinessSetting::where('type', 'about_us')->first();
        return view('web-views.about-us', [
            'about_us' => $about_us,
        ]);
    }

    public function privacy_policy()
    {
        $pp = BusinessSetting::where('type', 'privacy_policy')->first();
        return view('web-views.privacy-policy', [
            'privacy_policy' => $pp,
        ]);
    }

    public function termsandCondition()
    {
        $terms_condition = BusinessSetting::where('type', 'terms_condition')->first();
        return view('web-views.terms', compact('terms_condition'));
    }

    //order Details

    public function orderdetails()
    {
        return view('web-views.orderdetails');
    }

    public function chat_for_product(Request $request)
    {
        return $request->all();
    }

    //for test
    public function testOrderList()
    {
        return view('web-views.users-profile.profile.order-list');
    }

    public function testOrder()
    {
        return view('web-views.users-profile.profile.myorder');
    }

    public function testProfile()
    {
        return view('web-views.users-profile.profile.profileInfo');
    }

    public function testSupport()
    {
        return view('web-views.users-profile.profile.support-ticket');
    }

    public function testWish()
    {
        return view('web-views.users-profile.profile.wishList');
    }

    public function testChat()
    {
        return view('web-views.users-profile.profile.chat-with-seller');
    }

    public function testAddress()
    {
        return view('web-views.users-profile.profile.address');
    }

    public function testAddressView()
    {
        return view('web-views.users-profile.profile.address-view');
    }

    public function testpurchase()
    {
        return view('web-views.users-profile.profile.purchase');
    }

    public function supportChat()
    {
        return view('web-views.users-profile.profile.supportTicketChat');
    }

    public function error()
    {
        return view('web-views.404-error-page');
    }

    public function eyeTestCamp()
    {
        return view('web-views.eye_test_camp');
    }

    public function saveCampInquiry(Request $request)
    {
        $data = $request->all();
        $campInquiry = new CampInquiries;
        $campInquiry->name = isset($data['name']) ? $data['name'] : '';
        $campInquiry->email = isset($data['email']) ? $data['email'] : '';
        $campInquiry->mobile = isset($data['mobile']) ? $data['mobile'] : '';
        $campInquiry->org_name = isset($data['org_name']) ? $data['org_name'] : '';
        $campInquiry->website = isset($data['website']) ? $data['website'] : '';
        if ($campInquiry->save()) {
            $email = 'blinkzeyecare@gmail.com';
            try {
                Mail::to($email)->send(new CampInquiery($campInquiry));
            } catch (\Exception $e) {
                dd($e);
                exit;
            }
            Toastr::success('Inquiry has been saved successfully.');
        } else {
            Toastr::error('Unable to save Inquiry, Please try again.');
        }
        return redirect('eye-test-camp');
    }
}
