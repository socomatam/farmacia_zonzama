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


Route::get('/pruebas', function () {
    //$products = App\Product::where('id', '=', 1)->get();
		
		//$a = [];
		
		//foreach($products as $p){
			//$a=$p;
		//}
		
		//echo $a->nombre_de;
	$grupo = App\Carrito::selectRaw('id_producto, nombre_es, nombre_de, nombre_en, precio, imagen' )->groupBy('id_producto','nombre_es','nombre_de','nombre_en','precio','imagen')->get();
	$carrito = App\Carrito::all();
	$primero = App\Carrito::all()->first();
	$catidad = $primero;
	
	
	$aux = [];
	$i= 0;
	foreach($grupo as $p){
		foreach($carrito as $c){

			if($p->id_producto == $c->id_producto){
				$i++;
			}//fin if
			
		}//fin for each
		$aux[] = $i;
		$i =0;
	}//fin 
	
	
	
	
});//fin pruebas







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
Route::get('/orderproductsbyprice/{value}', 'FarmaciaController@orderProductsByPrice');
Route::get('/addtocar', 'FarmaciaController@addToCar')->middleware('auth');
Route::get('/buy/{user}', 'FarmaciaController@muestraCarro' )->middleware('auth');
Route::get('/deletecar/{value}','FarmaciaController@deleteCar')->middleware('auth');
Route::get('/getuserid','FarmaciaController@getUserId');
Route::get('/pay','FarmaciaController@paying');



//Route::get('/buy', 'FarmaciaController@comprar' )->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');
