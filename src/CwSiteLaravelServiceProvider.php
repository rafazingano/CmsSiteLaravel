<?php

namespace ConfrariaWeb\CwSiteLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CwSiteLaravelServiceProvider extends ServiceProvider {

    public function boot() {

        $layout = config('cwsitelaravel.layout', 'cwsitelaravel::eliteadmin.layouts.default');
        View::share('layout', $layout);

        $this->loadViewsFrom(__DIR__ . '/Views', 'cwsitelaravel');
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'cwsitelaravel');

        $this->publishes([__DIR__ . '/Config/cwsitelaravel.php' => config_path('cwsitelaravel.php'), 'config']);
        $this->publishes([__DIR__ . '/Translations' => resource_path('lang/vendor/cwsitelaravel'), 'translations']);
        $this->publishes([__DIR__ . '/Public/assets' => public_path('assets'), 'public']);
    }

    public function register() {
        //$this->app->make('ConfrariaWeb\CwSiteLaravel\Controllers\CwSiteLaravelController\Auth');
        //$this->app->make('ConfrariaWeb\CwSiteLaravel\Controllers\CwSiteLaravelPostController\Auth');
    }

}
