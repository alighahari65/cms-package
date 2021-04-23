<?php

namespace Test\Cms;

use Illuminate\Support\ServiceProvider;
use Test\Cms\Http\Middleware\Admin;

class CmsServiceProvider extends ServiceProvider 
{
    public function register() 
    {
        $this->app->bind('cms', function() {
            return new Cms;
        });

        $this->mergeConfigFrom(__DIR__.'\configs\main.php', 'cms');
    }   

    public function boot()
    {
        // dd(__DIR__);
        require __DIR__.'\Http\routes.php';

        $this->loadViewsFrom(__DIR__.'\Views', 'n');

        $this->app['router']->middleware('admin', Admin::class);

        $this->publishes([
            __DIR__.'\configs\main.php' => config_path('cmc.php'),
            __DIR__.'\Views' => base_path('resources\views\cms'),
            __DIR__.'\migrations' => database_path('migrations')
        ]);

        
    }
}