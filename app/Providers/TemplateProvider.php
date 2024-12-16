<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class TemplateProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('front.layout.template', function($view){
            //penanda jumlah articles pada category
            $configKeys = ['logo', 'blogname', 'title', 'caption', 'ads_harder', 'ads_footer',
            'footer' ];

            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });

        View::composer('front.contact.index', function($view){
            //penanda jumlah articles pada category
            $configKeys = ['phone', 'email', 'facebook', 'instagram', 'youtube'];

            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
