<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web;

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'WebController@home')->name('home');
    Route::get('quick-view', 'WebController@quick_view')->name('quick-view');
    Route::get('searched-products', 'WebController@searched_products')->name('searched-products');
    Route::get('checkout-details', 'WebController@checkout_details')->name('checkout-details');
    Route::get('checkout-shipping', 'WebController@checkout_shipping')->name('checkout-shipping')->middleware('customer');
    Route::get('checkout-payment', 'WebController@checkout_payment')->name('checkout-payment')->middleware('customer');
    Route::get('checkout-review', 'WebController@checkout_review')->name('checkout-review')->middleware('customer');
    Route::get('checkout-complete', 'WebController@checkout_complete')->name('checkout-complete')->middleware('customer');
    Route::get('shop-cart', 'WebController@shop_cart')->name('shop-cart');

    Route::get('categories', 'WebController@all_categories')->name('categories');
    Route::get('category-ajax/{id}', 'WebController@categories_by_category')->name('category-ajax');

    Route::get('brands', 'WebController@all_brands')->name('brands');

    Route::get('flash-deals/{id}', 'WebController@flash_deals')->name('flash-deals');
    Route::get('terms', 'WebController@termsandCondition')->name('terms');

    Route::get('/product/{slug}', 'WebController@product')->name('product');
    Route::get('products', 'WebController@products')->name('products');
    Route::get('orderDetails', 'WebController@orderdetails')->name('orderdetails');

    //Chat with seller from product details
    Route::get('chat-for-product', 'WebController@chat_for_product')->name('chat-for-product');

    Route::get('wishlists', 'WebController@viewWishlist')->name('wishlists')->middleware('customer');
    Route::post('store-wishlist', 'WebController@storeWishlist')->name('store-wishlist');
    Route::post('delete-wishlist', 'WebController@deleteWishlist')->name('delete-wishlist');

    Route::post('/currency', 'CurrencyController@changeCurrency')->name('currency.change');

    Route::get('about-us', 'WebController@about_us')->name('about-us');
    Route::get('privacy-policy', 'WebController@privacy_policy')->name('privacy-policy');
    //profile Route
    Route::get('user-account', 'UserProfileController@user_account')->name('user-account');
    Route::post('user-account-update', 'UserProfileController@user_update')->name('user-update');
    Route::post('user-account-picture', 'UserProfileController@user_picture')->name('user-picture');
    Route::get('account-address', 'UserProfileController@account_address')->name('account-address');
    Route::post('account-address-store', 'UserProfileController@address_store')->name('address-store');
    Route::get('account-address-delete', 'UserProfileController@address_delete')->name('address-delete');
    Route::post('account-address-update', 'UserProfileController@address_update')->name('address-update');
    Route::get('account-payment', 'UserProfileController@account_payment')->name('account-payment');
    Route::get('account-oder', 'UserProfileController@account_oder')->name('account-oder');
    Route::get('account-order-details', 'UserProfileController@account_order_details')->name('account-order-details');
    Route::get('generate-invoice/{id}', 'UserProfileController@generate_invoice')->name('generate-invoice');
    Route::get('account-wishlist', 'UserProfileController@account_wishlist')->name('account-wishlist'); //add to card not work

    Route::get('account-tickets', 'UserProfileController@account_tickets')->name('account-tickets');
    Route::post('ticket-submit', 'UserProfileController@ticket_submit')->name('ticket-submit');

    // Chatting start
    Route::get('chat-with-seller', 'ChattingController@chat_with_seller')->name('chat-with-seller');
    Route::get('messages', 'ChattingController@messages')->name('messages');
    Route::post('messages-store', 'ChattingController@messages_store')->name('messages_store');
    // chatting end
    //Support Ticket
    Route::group(['prefix' => 'support-ticket', 'as' => 'support-ticket.'], function () {
        Route::get('{id}', 'UserProfileController@single_ticket')->name('index');
        Route::post('{id}', 'UserProfileController@comment_submit')->name('comment');
        Route::get('delete/{id}', 'UserProfileController@support_ticket_delete')->name('delete');
        Route::get('close/{id}', 'UserProfileController@support_ticket_close')->name('close');
    });

    Route::get('account-transaction', 'UserProfileController@account_transaction')->name('account-transaction');
    Route::get('account-wallet-history', 'UserProfileController@account_wallet_history')->name('account-wallet-history');

    Route::post('review', 'ReviewController@store')->name('review.store');

    Route::group(['prefix' => 'track-order', 'as' => 'track-order.'], function () {
        Route::get('', 'UserProfileController@track_order')->name('index');
        Route::get('result-view', 'UserProfileController@track_order_result')->name('result-view');
        Route::get('last', 'UserProfileController@track_last_order')->name('last');
        Route::post('result', 'UserProfileController@track_order_result')->name('result');
    });
    //FAQ route
    Route::get('helpTopic', 'WebController@helpTopic')->name('helpTopic');
    //Contacts
    Route::get('contacts', 'WebController@contacts')->name('contacts');

    //sellerShop
    Route::get('shopView/{id}', 'WebController@seller_shop')->name('shopView');

    //top Rated
    Route::get('top-rated', 'WebController@top_rated')->name('topRated');
    Route::get('best-sell', 'WebController@best_sell')->name('bestSell');
    Route::get('new-product', 'WebController@new_product')->name('newProduct');

    //for test
    Route::get('order', 'WebController@testOrder')->name('order'); //done
    Route::get('orderList', 'WebController@testOrderList')->name('orderList'); //done/todo
    Route::get('profile', 'WebController@testProfile')->name('profile'); //done
    Route::get('supportTicket', 'WebController@testSupport')->name('support-ticket'); //done
    Route::get('wishList', 'WebController@testWish')->name('wishList'); //done/todo
    Route::get('chatTest', 'WebController@testChat')->name('chatTest'); // done
    Route::get('addressTest', 'WebController@testAddress')->name('address'); // done (header Problem)
    Route::get('addressView', 'WebController@testAddressView')->name('addressView'); //done
    Route::get('purchase', 'WebController@testpurchase')->name('purchase'); //done
    Route::get('supportChat', 'WebController@supportChat')->name('supportChat'); //done
    Route::get('orderDetails', 'WebController@orderdetails')->name('orderdetails'); //done/todo
    Route::get('error', 'WebController@error');

    Route::get('eye-test-camp', 'WebController@eyeTestCamp')->name('eye-test-camp');
    Route::post('save-camp-inquiry', 'WebController@saveCampInquiry')->name('save-camp-inquiry');

    Route::group(['prefix' => 'appointment', 'as' => 'appointment.'], function () {
        Route::get('slot-availability', 'AppointmentController@slot_availability')->name('slot-availability');
        Route::post('slot-booking', 'AppointmentController@slot_booking')->name('slot-booking');
        Route::post('slot-booked', 'AppointmentController@slot_booked')->name('slot-booked');
        Route::get('thank-you', 'AppointmentController@thank_you')->name('thank-you');
    });

    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
        Route::view('/', 'web-views.faq.index')->name('faq');
        Route::view('cataract', 'web-views.faq.cataract')->name('cataract');
        Route::view('diabetic-retinopathy-defined', 'web-views.faq.diabetic_retinopathy_defined')->name('diabetic-retinopathy-defined');
        Route::view('retinal-detachment', 'web-views.faq.retinal_detachment')->name('retinal-detachment');
        Route::view('age-related-macular-degeneration', 'web-views.faq.age_related_macular_degeneration')->name('age-related-macular-degeneration');
        Route::view('retina–macular-hole', 'web-views.faq.retina_macular_hole')->name('retina–macular-hole');
        Route::view('retinal-vein-occlusion', 'web-views.faq.retinal_vein_occlusion')->name('retinal-vein-occlusion');
        Route::view('congenital-cataract', 'web-views.faq.congenital_cataract')->name('congenital-cataract');
        Route::view('congenital-glaucoma', 'web-views.faq.congenital_glaucoma')->name('congenital-glaucoma');
        Route::view('amblyopia', 'web-views.faq.amblyopia')->name('amblyopia');
        Route::view('glasses-and-children', 'web-views.faq.glasses_and_children')->name('glasses-and-children');
        Route::view('ocular-allergy', 'web-views.faq.ocular_allergy')->name('ocular-allergy');
        Route::view('squint', 'web-views.faq.squint')->name('squint');
        Route::view('watering-eyes', 'web-views.faq.watering_eyes')->name('watering-eyes');
        Route::view('computer-vision-syndrome', 'web-views.faq.computer_vision_syndrome')->name('computer-vision-syndrome');
        Route::view('keratoconus', 'web-views.faq.keratoconus')->name('keratoconus');
        Route::view('glaucoma', 'web-views.faq.glaucoma')->name('glaucoma');
        Route::view('refractive-surgery', 'web-views.faq.refractive_surgery')->name('refractive-surgery');
        Route::view('oculoplasty-and-aesthetic-services', 'web-views.faq.oculoplasty_and_aesthetic_services')->name('oculoplasty-and-aesthetic-services');
        Route::view('uveitis', 'web-views.faq.uveitis')->name('uveitis');
        Route::view('contact-lens', 'web-views.faq.contact_lens')->name('contact-lens');
    });
        Route::view('our-clinic', 'web-views.our_clinic')->name('our-clinic');
        Route::view('know-your-frame-size', 'web-views.know_your_frame_size')->name('know-your-frame-size');

});

//Seller shop apply
Route::group(['prefix' => 'shop', 'as' => 'shop.', 'namespace' => 'Seller\Auth'], function () {
    Route::get('apply', 'RegisterController@create')->name('apply');
    Route::post('apply', 'RegisterController@store');
});

//check done

Route::group(['prefix' => 'cart', 'as' => 'cart.', 'namespace' => 'Web'], function () {
    Route::post('variant_price', 'CartController@variant_price')->name('variant_price');
    Route::post('add', 'CartController@addToCart')->name('add');
    Route::post('remove', 'CartController@removeFromCart')->name('remove');
    Route::post('nav-cart-items', 'CartController@updateNavCart')->name('nav_cart');
    Route::post('toolbar', 'CartController@updateToolbar')->name('toolbar');
    Route::post('updateQuantity', 'CartController@updateQuantity')->name('updateQuantity');
});

//Seller shop apply
Route::group(['prefix' => 'coupon', 'as' => 'coupon.', 'namespace' => 'Web'], function () {
    Route::post('apply', 'CouponController@apply')->name('apply');
});
//check done

// SSLCOMMERZ Start
/*Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');*/
Route::post('pay-ssl', 'SslCommerzPaymentController@index');
Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');
Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END

/*paypal*/
/*Route::get('/paypal', function (){return view('paypal-test');})->name('paypal');*/
Route::post('pay-paypal', 'PaypalPaymentController@payWithpaypal')->name('pay-paypal');
Route::get('paypal-status', 'PaypalPaymentController@getPaymentStatus')->name('paypal-status');
Route::get('paypal-success', 'PaypalPaymentController@success')->name('paypal-success');
Route::get('paypal-fail', 'PaypalPaymentController@fail')->name('paypal-fail');
Route::get('howtosell', 'SslCommerzPaymentController@how_to_sell')->name('howtosell');
Route::get('shoot', 'SellyourproductController@index')->name('shoot');
Route::get('photography', 'SellyourproductController@photography')->name('photography');
Route::get('delivery', 'SellyourproductController@delivery')->name('delivery');
Route::get('branding_and_marketing', 'SellyourproductController@branding_and_marketing')->name('branding_and_marketing');
Route::get('getting_found', 'SellyourproductController@getting_found')->name('getting_found');
Route::get('community', 'SellyourproductController@community')->name('community');
Route::get('branding_and_marketing', 'SellyourproductController@branding_and_marketing')->name('branding_and_marketing');
Route::get('legal', 'SellyourproductController@legal')->name('legal');
Route::get('productivity', 'SellyourproductController@productivity')->name('productivity');
Route::get('pricing_taxex_finance', 'SellyourproductController@pricing_taxex_finance')->name('pricing_taxex_finance');
Route::get('sessonal_tips', 'SellyourproductController@sessonal_tips')->name('sessonal_tips');
Route::get('growth_stratigies', 'SellyourproductController@growth_stratigies')->name('growth_stratigies');
Route::get('photography1', 'SellyourproductController@photography1')->name('photography1');
Route::get('photographysmartphones', 'SellyourproductController@photographysmartphones')->name('photographysmartphones');
Route::get('photography2020', 'SellyourproductController@photography2020')->name('photography2020');
Route::get('photographyguide', 'SellyourproductController@photographyguide')->name('photographyguide');
Route::get('deliverysmooth', 'SellyourproductController@deliverysmooth')->name('deliverysmooth');
Route::get('deliveryguide', 'SellyourproductController@deliveryguide')->name('deliveryguide');
Route::get('deliveryfree', 'SellyourproductController@deliveryfree')->name('deliveryfree');
Route::get('deliverypodcast', 'SellyourproductController@deliverypodcast')->name('deliverypodcast');
Route::get('gettingAdd', 'SellyourproductController@gettingAdd')->name('gettingAdd');
Route::get('getting_optimizing', 'SellyourproductController@getting_optimizing')->name('getting_optimizing');
Route::get('gettingpodcast', 'SellyourproductController@gettingpodcast')->name('gettingpodcast');
Route::get('getting_question', 'SellyourproductController@getting_question')->name('getting_question');

Route::get('branding_chritmas', 'SellyourproductController@branding_chritmas')->name('branding_chritmas');
Route::get('branding_offsite', 'SellyourproductController@branding_offsite')->name('branding_offsite');
Route::get('branding_chritmas_season', 'SellyourproductController@branding_chritmas_season')->name('branding_chritmas_season');
Route::get('branding_esty_ads_strategy', 'SellyourproductController@branding_esty_ads_strategy')->name('branding_esty_ads_strategy');

Route::get('legalplacing', 'SellyourproductController@legalplacing')->name('legalplacing');
Route::get('legal3', 'SellyourproductController@legal3')->name('legal3');
Route::get('legalwrite', 'SellyourproductController@legalwrite')->name('legalwrite');
Route::get('legaltips', 'SellyourproductController@legaltips')->name('legaltips');


Route::get('streamline_finance', 'SellyourproductController@streamline_finance')->name('streamline_finance');
Route::get('small_finance', 'SellyourproductController@small_finance')->name('small_finance');
Route::get('paying_pitfall_finance', 'SellyourproductController@paying_pitfall_finance')->name('paying_pitfall_finance');
Route::get('paying_finance', 'SellyourproductController@paying_finance')->name('paying_finance');

Route::get('productivitystats', 'SellyourproductController@productivitystats')->name('productivitystats');
Route::get('productivitycase', 'SellyourproductController@productivitycase')->name('productivitycase');
Route::get('productivityfavroite', 'SellyourproductController@productivityfavroite')->name('productivityfavroite');
Route::get('productivitybalance', 'SellyourproductController@productivitybalance')->name('productivitybalance');


Route::get('growth_dsell_digital', 'SellyourproductController@growth_dsell_digital')->name('growth_dsell_digital');
Route::get('growth_podcast_trascript', 'SellyourproductController@growth_podcast_trascript')->name('growth_podcast_trascript');
Route::get('growth_ultimate', 'SellyourproductController@growth_ultimate')->name('growth_ultimate');
Route::get('growth_most_out', 'SellyourproductController@growth_most_out')->name('growth_most_out');

Route::get('communitycreative', 'SellyourproductController@communitycreative')->name('communitycreative');
Route::get('communitypodcast', 'SellyourproductController@communitypodcast')->name('communitypodcast');
Route::get('communityblack', 'SellyourproductController@communityblack')->name('communityblack');
Route::get('communitybags', 'SellyourproductController@communitybags')->name('communitybags');


Route::get('seasonal_spring', 'SellyourproductController@seasonal_spring')->name('seasonal_spring');
Route::get('seasonal_shopping', 'SellyourproductController@seasonal_shopping')->name('seasonal_shopping');
Route::get('seasonal_2021', 'SellyourproductController@seasonal_2021')->name('seasonal_2021');
Route::get('seasonal_home_living', 'SellyourproductController@seasonal_home_living')->name('seasonal_home_living');
/*paypal*/

/*Route::get('stripe', function (){
return view('stripe-test');
});*/
Route::post('pay-stripe', 'StripePaymentController@paymentProcess')->name('pay-stripe');
Route::get('pay-stripe/success', 'StripePaymentController@success')->name('pay-stripe.success');
Route::get('pay-stripe/fail', 'StripePaymentController@success')->name('pay-stripe.fail');

/*Route::get('paytm', function (){
return view('paytm-test');
});*/
Route::post('paytm-submit', 'PaytmPaymentController@order')->name('paytm-submit');
Route::post('payment/status', 'PaytmPaymentController@paymentCallback')->name('payment/status');


// Get Route For Show Payment Form
Route::get('paywithrazorpay', 'RazorPayController@payWithRazorpay')->name('paywithrazorpay');
Route::post('payment-razor', 'RazorPayController@payment')->name('payment-razor');
Route::post('payment-razor/payment2', 'RazorPayController@payment_mobile')->name('payment-razor.payment2');
Route::get('payment-razor/success', 'RazorPayController@success')->name('payment-razor.success');
Route::get('payment-razor/fail', 'RazorPayController@success')->name('payment-razor.fail');

Route::get('payment-success', 'Customer\PaymentController@success')->name('payment-success');
Route::get('payment-fail', 'Customer\PaymentController@fail')->name('payment-fail');
