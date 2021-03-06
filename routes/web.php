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
// From Laravel Blade to Vue.js + API [Live-coding Example]
//  https://www.youtube.com/watch?v=4uVNz9sQn18
//  https://startbootstrap.com/template/shop-homepage
Route::get('/convue','SinVueController@index');
Route::get('/convue/con', function () {
  return view('vue/ConVue');
});

// PARA TODOS
// Route::get('/todos', function () {
//     return view('todos.index');
// });

// Route::get('/todos/create', function () {
//     return view('todos.create');
// });


// https://www.youtube.com/watch?v=0cJA208Roy8&list=PLe30vg_FG4OSCTUv3XIkwH--cK2D7rfJJ&index=22
Route::get('/todos','TodoController@index')->name('todo.index');

Route::get('/todos/create', 'TodoController@create');

Route::post('/todos/create', 'TodoController@store');

//Route::get('/todos/{id}/edit', 'TodoController@edit');
Route::get('/todos/{todo}/edit', 'TodoController@edit'); //28 Route Model Binding

Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

//verificar si llamada entra a la ruta
// Route::patch('/todos/{todo}/update', function() {
//   dd('Si entro a la ruta');
// })->name('todo.update');

//PracticaValidaciones
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');

Route::get('posteo/create', 'PosteoController@create');
Route::post('posteo/create', 'PosteoController@store');
//PracticaValidaciones - ConFormulariosDeValidaci??n
Route::get('posteo/createFormValid', 'PosteoController@createFormValid');
Route::post('posteo/createFormValid', 'PosteoController@storeFormValid');
