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



Route::get('/', 'WebstoreController@index');

Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');

Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');

Route::get('/store/cart', 'CartController@cart');

Route::get('/store/checkout', 'CheckoutController@index');

Route::get('checkout', 'OrderDetailController@new')->name('checkout');

Route::get('/store/shop', 'ShopController@index');

Route::get('/search', 'ShopController@search');

Route::get('/orderByName', 'ShopController@orderByName');

Route::get('/orderByPrice', 'ShopController@orderByPrice');

Route::get('/store/shop/{id}', 'ShopController@category');

Route::get('/store/about-us', function(){
    return view('/store/about-us');
});

Route::get('/store/login', function(){
    return view('/store/login');
});

Route::get('/store/register', function(){
    return view('/store/register');
});

Route::get('/store/contact', 'ContactController@index');

Route::post('/create', 'ContactController@create');

Route::get('/store/product-details/{id}', 'ShopController@detail');





Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'userAdministrator' && 'userEmployee'], function() {

    Route::get('/admin/productCategory', [
        'uses' => 'ProductCategoryController@index',
        'as' => 'productCategory.index',
    ]);

    Route::group(['prefix' => '/admin/productCategory'], function () {
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

    Route::get('/admin/product', [
        'uses' => 'ProductController@index',
        'as' => 'product.index',
    ]);

    Route::group(['prefix' => '/admin/product'], function () {
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

    Route::get('/admin/order', [
        'uses' => 'OrderController@index',
        'as' => 'order.index',
    ]);

    Route::get('/admin/orderDetail/{id}', 'OrderController@orderDetail');

    Route::group(['prefix' => '/admin/order'], function () {

        Route::get('/{id}', [
            'uses' => 'OrderController@show',
            'as'   => 'order.show',
        ]);

        Route::put('/{id}', [
            'uses' => 'OrderController@update',
            'as'   => 'order.update',
        ]);

    });

    Route::get('/admin/inventory', [
        'uses' => 'InventoryController@index',
        'as' => 'inventory.index',
    ]);

    Route::group(['prefix' => '/admin/inventory'], function () {
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

    Route::get('/admin/user', [
        'uses' => 'UserController@index',
        'as' => 'user.index',
    ]);

    Route::post('/admin/user', [
        'uses' => 'UserController@index',
        'as' => 'user.update',
    ]);

});

Route::group(['middleware' => 'userAdministrator'], function() {


    Route::get('/admin/administrator', [
        'uses' => 'AdministratorController@index',
        'as' => 'user.index',
    ]);

    Route::group(['prefix' => '/admin/administrator'], function () {
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

    Route::get('/admin/employee', [
        'uses' => 'EmployeeController@index',
        'as' => 'user.index',
    ]);

    Route::group(['prefix' => '/admin/employee'], function () {
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

    Route::get('/admin/customer', [
        'uses' => 'CustomerController@index',
        'as' => 'user.index',
    ]);

    Route::group(['prefix' => '/admin/customer'], function () {

        Route::get('/{id}', [
            'uses' => 'CustomerController@show',
            'as'   => 'customer.show',
        ]);

        Route::put('/{id}', [
            'uses' => 'CustomerController@update',
            'as'   => 'customer.update',
        ]);

    });

    Route::get('/admin/role', [
        'uses' => 'RoleController@index',
        'as' => 'role.index',
    ]);

});