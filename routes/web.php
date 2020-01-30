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

Auth::routes();

Route::resource('/', 'FarmaciaController');


/*Rutas a todas las pรกginas de la web*/

Route::post('/farmacia/email', 'FarmaciaController@email');

Route::get('/products', 'FarmaciaController@products' );
Route::get('/rawmaterials', 'FarmaciaController@rawMaterials' );
Route::get('/howwedo', 'FarmaciaController@howWeDo' );
Route::get('/whoweare', 'FarmaciaController@whoWeAre' );
Route::get('/collaborators', 'FarmaciaController@collaborators' );
Route::get('/projectcez', 'FarmaciaController@projectCez' );
Route::get('/contact', 'FarmaciaController@contact' );
Route::get('/item/{id}', 'FarmaciaController@mostratProducto' );
Route::get('/orderproducts/{value}', 'FarmaciaController@orderProducts' );
Route::get('/buy', 'FarmaciaController@comprar' )->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');
