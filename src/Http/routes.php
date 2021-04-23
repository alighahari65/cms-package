<?php


// Route::get('admin', function() {
//     return 'admin';
// });

use Test\Cms\Http\Middleware\Admin;

Route::namespace('Test\Cms\Http\Controller')->middleware(Admin::class)->group(function () {
    Route::get('admin', 'AdminController@index');
    Route::get('config', function() {
        return config('cms.name');
    });

});