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
