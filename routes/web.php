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

Route::get('/role', [
    'uses' => 'RoleController@index',
    'as' => 'role.index',
]);

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
