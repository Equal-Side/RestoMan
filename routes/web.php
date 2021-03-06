<?php

//Public routes

Route::get('/', 'HomeController@index')->name('index');
Route::get('/menu', 'HomeController@menu')->name('menu');

Route::group(['as' => 'client.', 'middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@redirect');
    Route::get('dashboard', 'HomeController@index')->name('home');
    Route::get('change-password', 'ChangePasswordController@create')->name('password.create');
    Route::post('change-password', 'ChangePasswordController@update')->name('password.update');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth.admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    Route::get('kitchen', 'KitchenController@index')->name('kitchen');

    Route::get('add_order', 'OrderController@index_add_order')->name('add_order');
    Route::get('all_order', 'OrderController@index_all_orders')->name('all_order');
    Route::get('non_paid_orders', 'OrderController@index_non_paid_order')->name('non_paid_order');

});

