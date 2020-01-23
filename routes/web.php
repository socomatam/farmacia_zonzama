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



//Route::get('/products', function () {
 //   return view('farmacia.products');
//});




Auth::routes();

Route::resource('/', 'FarmaciaController');

/*Rutas a todas las páginas de la web*/
Route::get('/products', 'FarmaciaController@products' );
Route::get('/rawmaterials', 'FarmaciaController@rawMaterials' );
Route::get('/howwedo', 'FarmaciaController@howWeDo' );
Route::get('/whoweare', 'FarmaciaController@whoWeAre' );
Route::get('/collaborators', 'FarmaciaController@collaborators' );
Route::get('/projectcez', 'FarmaciaController@projectCez' );
Route::get('/contact', 'FarmaciaController@contact' );

Route::get('/home', 'HomeController@index')->name('home');
