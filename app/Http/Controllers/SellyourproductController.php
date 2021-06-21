<?php

namespace App\Http\Controllers;

use App\CPU\CartManager;
use App\Library\sslcommerz\SslCommerzNotification;
use App\Model\Order;
use App\Model\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SellyourproductController extends Controller
{

    
     public function index(Request $request)
    {
        return view('sellyourproduct.shoot');
    }
    public function photography(Request $request)
    {
        return view('sellyourproduct.photography');
    }
    public function delivery(Request $request)
    {
        return view('sellyourproduct.delivery');
    }
    public function getting_found(Request $request)
    {
        return view('sellyourproduct.getting_found');
    }
    public function branding_and_marketing(Request $request)
    {
        return view('sellyourproduct.branding_and_marketing');
    }
    public function legal(Request $request)
    {
        return view('sellyourproduct.legal');
    }
    public function productivity(Request $request)
    {
        return view('sellyourproduct.productivity');
    }
    public function community(Request $request)
    {
        return view('sellyourproduct.community');
    } 
    public function pricing_taxex_finance(Request $request)
    {
        return view('sellyourproduct.pricing_taxex_finance');
    }
     public function sessonal_tips(Request $request)
    {
        return view('sellyourproduct.sessonal_tips');
    }
    public function growth_stratigies(Request $request)
    {
        return view('sellyourproduct.growth_stratigies');
    }
    public function photography1(Request $request)
    {
        return view('sellyourproduct.photography1');
    }
    public function photographysmartphones(Request $request)
    {
        return view('sellyourproduct.photographysmartphones');
    }
    public function photography2020(Request $request)
    {
        return view('sellyourproduct.photography2020');
    }
    public function photographyguide(Request $request)
    {
        return view('sellyourproduct.photographyguide');
    }
    public function deliverysmooth(Request $request)
    {
        return view('sellyourproduct.deliverysmooth');
    }
    public function deliveryguide(Request $request)
    {
        return view('sellyourproduct.deliveryguide');
    }
    public function deliveryfree(Request $request)
    {
        return view('sellyourproduct.deliveryfree');
    }
    public function deliverypodcast(Request $request)
    {
        return view('sellyourproduct.deliverypodcast');
    }

    public function gettingAdd(Request $request)
    {
        return view('sellyourproduct.gettingAdd');
    }
    public function getting_optimizing(Request $request)
    {
        return view('sellyourproduct.getting_optimizing');
    }
    public function gettingpodcast(Request $request)
    {
        return view('sellyourproduct.gettingpodcast');
    }
    public function getting_question(Request $request)
    {
        return view('sellyourproduct.getting_question');
    }
    

     public function branding_chritmas(Request $request)
    {
        return view('sellyourproduct.branding_chritmas');
    }
    public function branding_offsite(Request $request)
    {
        return view('sellyourproduct.branding_offsite');
    }
    public function branding_chritmas_season(Request $request)
    {
        return view('sellyourproduct.branding_chritmas_season');
    }
    public function branding_esty_ads_strategy(Request $request)
    {
        return view('sellyourproduct.branding_esty_ads_strategy');
    }

    public function legalplacing(Request $request)
    {
        return view('sellyourproduct.legalplacing');
    }
    public function legal3(Request $request)
    {
        return view('sellyourproduct.legal3');
    }
    public function legalwrite(Request $request)
    {
        return view('sellyourproduct.legalwrite');
    }
    public function legaltips(Request $request)
    {
        return view('sellyourproduct.legaltips');
    }


     public function streamline_finance(Request $request)
    {
        return view('sellyourproduct.streamline_finance');
    }
    public function small_finance(Request $request)
    {
        return view('sellyourproduct.small_finance');
    }
    public function paying_pitfall_finance(Request $request)
    {
        return view('sellyourproduct.paying_pitfall_finance');
    }
    public function paying_finance(Request $request)
    {
        return view('sellyourproduct.paying_finance');
    }

     public function productivitybalance(Request $request)
    {
        return view('sellyourproduct.productivitybalance');
    }
    public function productivityfavroite(Request $request)
    {
        return view('sellyourproduct.productivityfavroite');
    }
    public function productivitycase(Request $request)
    {
        return view('sellyourproduct.productivitycase');
    }
    public function productivitystats(Request $request)
    {
        return view('sellyourproduct.productivitystats');
    }


    public function growth_dsell_digital(Request $request)
    {
        return view('sellyourproduct.growth_dsell_digital');
    }
    public function growth_podcast_trascript(Request $request)
    {
        return view('sellyourproduct.growth_podcast_trascript');
    }
    public function growth_ultimate(Request $request)
    {
        return view('sellyourproduct.growth_ultimate');
    }
    public function growth_most_out(Request $request)
    {
        return view('sellyourproduct.growth_most_out');
    }

    public function communitycreative(Request $request)
    {
        return view('sellyourproduct.communitycreative');
    }
    public function communitypodcast(Request $request)
    {
        return view('sellyourproduct.communitypodcast');
    }
    public function communityblack(Request $request)
    {
        return view('sellyourproduct.communityblack');
    }
    public function communitybags(Request $request)
    {
        return view('sellyourproduct.communitybags');
    }
    

    public function seasonal_spring(Request $request)
    {
        return view('sellyourproduct.seasonal_spring');
    }
    public function seasonal_shopping(Request $request)
    {
        return view('sellyourproduct.seasonal_shopping');
    }
    public function seasonal_2021(Request $request)
    {
        return view('sellyourproduct.seasonal_2021');
    }
    public function seasonal_home_living(Request $request)
    {
        return view('sellyourproduct.seasonal_home_living');
    }
    

}
