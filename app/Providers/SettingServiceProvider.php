<?php

namespace App\Providers;

use App\Services\Setting\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class SettingServiceProvider extends ServiceProvider implements DeferrableProvider
{

    protected $defer=true;
    public function register()
    {
        if (Schema::hasTable('settings')) {
            $this->app->singleton(Settings::class,function($app){
                return new Settings();
            });
        //$this->app->bind('access', 'App\Services\Setting\Setting');
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
