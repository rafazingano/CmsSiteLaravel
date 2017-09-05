<?php

Route::middleware(['web', 'auth'])->prefix('admin')->group(function () {
    Route::get('/', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelController@index');
    
    //Route::get('posts/{type}', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPostController@index')->name('posts.type');
    //Route::get('posts/{type}/{post}', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPostController@show')->name('posts.show');
    Route::resource('posts', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPostController');
    
    Route::resource('poststypes', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPostTypeController');
    
    Route::resource('postscategories', '\ConfrariaWeb\CwSiteLaravel\Controllers\Auth\CwSiteLaravelPostCategoryController');
    
});