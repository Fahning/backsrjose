<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//grupo de clientes
Route::group([
    'prefix' => 'clients'
], function () {
    Route::get('all', 'ClientController@index');
    Route::post('new', 'ClientController@store');
    Route::get('show/{client}', 'ClientController@show');
    Route::put('update/{client}', 'ClientController@update');
    Route::delete('delete/{client}', 'ClientController@destroy');

});

//grupo de produtos
Route::group([
    'prefix' => 'products'
], function () {
    Route::get('all', 'ProductController@index');
    Route::post('new', 'ProductController@store');
    Route::get('show/{product}', 'ProductController@show');
    Route::put('update/{product}', 'ProductController@update');
    Route::delete('delete/{product}', 'ProductController@destroy');

});

//grupo de produtos
Route::group([
    'prefix' => 'waiters'
], function () {
    Route::get('all', 'WaiterController@index');
    Route::post('new', 'WaiterController@store');
    Route::get('show/{waiter}', 'WaiterController@show');
    Route::put('update/{waiter}', 'WaiterController@update');
    Route::delete('delete/{waiter}', 'WaiterController@destroy');

});

//grupo de comandas
Route::group([
    'prefix' => 'orders'
], function () {
    Route::get('all', 'OrderController@index');
    Route::post('new', 'OrderController@store');
    Route::get('show/{order}', 'OrderController@show');
    Route::put('update/{order}', 'OrderController@update');
    Route::delete('delete/{order}', 'OrderController@destroy');

});

//grupo de comandas
Route::group([
    'prefix' => 'ordersproduct'
], function () {
    Route::get('all', 'OrderProductController@index');
    Route::post('new', 'OrderProductController@store');
    Route::get('show/{order}', 'OrderProductController@show');
    Route::put('update/{order}', 'OrderProductController@update');
    Route::delete('delete/{order}', 'OrderProductController@destroy');

});
