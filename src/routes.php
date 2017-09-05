<?php

Route::middleware(['web', 'auth'])->prefix('admin')->group(function () {
    Route::get('/', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelController@index');
    Route::resource('pages', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPageController');
});