<?php

namespace ConfrariaWeb\Site;

use Illuminate\Support\ServiceProvider;

class SiteServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/views', 'site');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadTranslationsFrom(__DIR__ . '/translations', 'site');
        $this->publishes([
            __DIR__ . '/config/site.php' => config_path('site.php'), 'config'
        ]);
        $this->publishes([
            __DIR__ . '/translations' => resource_path('lang/vendor/site'), 'translations'
        ]);
    }

    public function register() {
        $this->app->make('ConfrariaWeb\Site\Controllers\SiteController');
    }

}
