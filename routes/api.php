<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    /*Route::get('/products', 'App\Http\Controllers\ProductController@index');          //Melhorando metodos
    Route::post('/products', 'App\Http\Controllers\ProductController@store');
    Route::put('/products/{product}', 'App\Http\Controllers\ProductController@update');
    Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show'); 
    Route::delete('/products/{product}', 'App\Http\Controllers\ProductController@destroy');*/

    //Route::resource('products', 'App\Http\Controllers\ProductController');
    Route::resources([
            'products' => 'App\Http\Controllers\ProductController',
                'users' => 'App\Http\Controllers\UserController',
            ]);
});