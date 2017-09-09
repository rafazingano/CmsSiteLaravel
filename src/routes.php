<?php

Route::middleware(['web', 'auth'])->prefix('admin')->group(function () {
    Route::get('/', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelController@index');
    Route::resource('posts', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPostController');
    Route::resource('poststypes', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelTypeController');
    Route::resource('postscategories', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelCategoryController');
});
