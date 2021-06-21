<?php

namespace App\Providers;

use App\CPU\Helpers;
use App\Model\BusinessSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

//\Illuminate\Support\Facades\URL::forceScheme('https');

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        if (env('APP_ENV', 'local') == 'live') {
            \URL::forceScheme('https');
        }

        View::share('key', 'value');
        try {


            /*if(config('app.env') === 'live') {
                \URL::forceScheme('https');
            }*/

            $web = BusinessSetting::all();
            $settings = Helpers::get_settings($web, 'colors');
            //$data = json_decode($settings['value'], true);
            //print_r($data);die;
            View::share('web_config', [
                // 'primary_color' => "#fe6702",
                //'primary_color' => "#EC7063",
                'primary_color' => "#87C7DE",
                'secondary_color' => "#14a989",
                'name' => Helpers::get_settings($web, 'company_name'),
                'phone' => Helpers::get_settings($web, 'company_phone'),
                'web_logo' => Helpers::get_settings($web, 'company_web_logo'),
                'mob_logo' => Helpers::get_settings($web, 'company_mobile_logo'),
                'fav_icon' => Helpers::get_settings($web, 'company_fav_icon'),
                'email' => Helpers::get_settings($web, 'company_email'),
                'about' => Helpers::get_settings($web, 'about_us'),
                'footer_logo' => Helpers::get_settings($web, 'company_footer_logo'),
                'copyright_text' => Helpers::get_settings($web, 'company_copyright_text'),
            ]);
        } catch (\Exception $ex) {

        }

        Schema::defaultStringLength(191);
    }
}
