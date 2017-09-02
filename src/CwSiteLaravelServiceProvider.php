<?php

namespace ConfrariaWeb\CwSiteLaravel;

use Illuminate\Support\ServiceProvider;

class CwSiteLaravelServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views', 'site');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadTranslationsFrom(__DIR__ . '/translations', 'cwsitelaravel');
        $this->publishes([
            __DIR__ . '/config/cwsitelaravel.php' => config_path('cwsitelaravel.php'), 'config'
        ]);
        $this->publishes([
            __DIR__ . '/translations' => resource_path('lang/vendor/cwsitelaravel'), 'translations'
        ]);
    }

    public function register() {
        $this->app->make('ConfrariaWeb\CwSiteLaravel\Controllers\CwSiteLaravelController');
    }

}
