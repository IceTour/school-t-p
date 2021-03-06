<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['auth',
        //'role:admin'
    ],
    'namespace' => 'Admin',
], function () {

    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('users', 'UsersController');

});
