<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'userAdministrator' && 'userEmployee'], function() {

    Route::get('/productCategory', [
        'uses' => 'ProductCategoryController@index',
        'as' => 'productCategory.index',
    ]);

    Route::group(['prefix' => 'productCategory'], function () {
        Route::get('/{id}', [
            'uses' => 'ProductCategoryController@show',
            'as'   => 'productCategory.show',
        ]);

        Route::post('/', [
            'uses' => 'ProductCategoryController@store',
            'as'   => 'productCategory.store',
        ]);

        Route::put('/{id}', [
            'uses' => 'ProductCategoryController@update',
            'as'   => 'productCategory.update',
        ]);

        Route::delete('/{id}', [
            'uses' => 'ProductCategoryController@destroy',
            'as'   => 'productCategory.destroy',
        ]);
    });

    Route::get('/product', [
        'uses' => 'ProductController@index',
        'as' => 'product.index',
    ]);

    Route::group(['prefix' => 'product'], function () {
        Route::get('/{id}', [
            'uses' => 'ProductController@show',
            'as'   => 'product.show',
        ]);

        Route::post('/', [
            'uses' => 'ProductController@store',
            'as'   => 'product.store',
        ]);

        Route::put('/{id}', [
            'uses' => 'ProductController@update',
            'as'   => 'product.update',
        ]);

        Route::delete('/{id}', [
            'uses' => 'ProductController@destroy',
            'as'   => 'product.destroy',
        ]);
    });

    Route::get('/order', [
        'uses' => 'OrderController@index',
        'as' => 'order.index',
    ]);

    Route::get('/orderDetail', [
        'uses' => 'OrderDetailController@index',
        'as' => 'orderDetail.index',
    ]);

    Route::group(['prefix' => 'order'], function () {

        Route::get('/{id}', [
            'uses' => 'OrderController@show',
            'as'   => 'order.show',
        ]);

        Route::put('/{id}', [
            'uses' => 'OrderController@update',
            'as'   => 'order.update',
        ]);

    });

    Route::get('/inventory', [
        'uses' => 'InventoryController@index',
        'as' => 'inventory.index',
    ]);

    Route::group(['prefix' => 'inventory'], function () {
        Route::get('/{id}', [
            'uses' => 'InventoryController@show',
            'as'   => 'inventory.show',
        ]);

        Route::post('/', [
            'uses' => 'InventoryController@store',
            'as'   => 'inventory.store',
        ]);

        Route::put('/{id}', [
            'uses' => 'InventoryController@update',
            'as'   => 'inventory.update',
        ]);

        Route::delete('/{id}', [
            'uses' => 'InventoryController@destroy',
            'as'   => 'inventory.destroy',
        ]);
    });

    Route::get('/user', [
        'uses' => 'UserController@index',
        'as' => 'user.index',
    ]);

});

Route::group(['middleware' => 'userAdministrator'], function() {


    Route::get('/administrator', [
        'uses' => 'AdministratorController@index',
        'as' => 'user.index',
    ]);

    Route::group(['prefix' => 'administrator'], function () {
        Route::get('/{id}', [
            'uses' => 'AdministratorController@show',
            'as'   => 'administrator.show',
        ]);

        Route::put('/{id}', [
            'uses' => 'AdministratorController@update',
            'as'   => 'administrator.update',
        ]);

        Route::delete('/{id}', [
            'uses' => 'AdministratorController@destroy',
            'as'   => 'administrator.destroy',
        ]);
    });

    Route::get('/employee', [
        'uses' => 'EmployeeController@index',
        'as' => 'user.index',
    ]);

    Route::group(['prefix' => 'employee'], function () {
        Route::get('/{id}', [
            'uses' => 'EmployeeController@show',
            'as'   => 'employee.show',
        ]);

        Route::put('/{id}', [
            'uses' => 'EmployeeController@update',
            'as'   => 'employee.update',
        ]);

        Route::delete('/{id}', [
            'uses' => 'EmployeeController@destroy',
            'as'   => 'employee.destroy',
        ]);
    });

    Route::get('/customer', [
        'uses' => 'CustomerController@index',
        'as' => 'user.index',
    ]);

    Route::group(['prefix' => 'customer'], function () {

        Route::get('/{id}', [
            'uses' => 'CustomerController@show',
            'as'   => 'customer.show',
        ]);

        Route::put('/{id}', [
            'uses' => 'CustomerController@update',
            'as'   => 'customer.update',
        ]);

    });

    Route::get('/role', [
        'uses' => 'RoleController@index',
        'as' => 'role.index',
    ]);

});