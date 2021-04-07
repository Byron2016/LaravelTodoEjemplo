<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

// Route::post('/upload', function(Request $request){
//     //dd('sss');
//     //dd($request->all());
//     //dd($request->file('image'));
//     //dd($request->image);
//     //$request->image->store('images');
//     $request->image->store('images', 'public');
//     return 'subido';

// });
Route::post('/upload', 'UserController@uploadAvatar');

Route::get('/cardirecto', function () {
    return view('carrito');
});

Route::get('/carrito', 'CarritoController@traevista');

Route::get('/user', 'UserController@index');
Route::get('/usercomments', 'UserController@indexcomments');
Route::get('/usercommentsdos', 'UserController@usuariosPorComentario');
Route::get('/address', 'AddressController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ajax-request', 'AjaxController@create');
Route::post('ajax-request','AjaxController@obtieneDataCarrito');

Route::get('/desplegar','DesplegarController@index');
Route::view('/convue','vue_desplegar');