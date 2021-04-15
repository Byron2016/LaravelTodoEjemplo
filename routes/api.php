<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResoruce('obtienecarrito','CarritoController');
// Route::get('categories', 'Api\CategoryController@index');
// Route::get('products', 'Api\ProductController@index');

Route::get('categories', 'Api\CategoryController@index');
Route::get('products', 'Api\ProductController@index');

// From Laravel Blade to Vue.js + API [Live-coding Example]
//  https://www.youtube.com/watch?v=4uVNz9sQn18
//  https://startbootstrap.com/template/shop-homepage
Route::get('ncategories', 'Api\NcategoryController@index');
Route::get('nproducts', 'Api\NproductController@index');