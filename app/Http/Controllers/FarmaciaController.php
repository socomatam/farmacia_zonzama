<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborator;
use App\Rawmaterial;
use App\Tutorial;
use App\Slider;
use App\Product;
use App\Carrito;


class FarmaciaController extends Controller{
	
	private $contadorCarrito ;
	
	public function __construct($contadorCarrito = 55){
		$this->contadorCarrito = $contadorCarrito; 
	}
	
	public function addToCar($value){
		
		$products = Product::where('id', '=', $value)->get();
		
		$a = [];
		
		foreach($products as $p){
			$a=$p;
		}//
		
		$carro = new Carrito();
		$carro->nombre_es = $a->nombre_es;
		$carro->nombre_en = $a->nombre_en;
		$carro->nombre_de = $a->nombre_de;
		$carro->id_producto = $a->id;
		$carro->precio = $a->precio;
		$carro->imagen = $a->imagen;
		$carro->save();	
		
		return $a;
		
	}//fin carrito
	
	public function orderProductsByPrice($value){
		
		
	
	
//$user = DB::table('users')->where('name', 'John')->first();


		$products = Product::where('precio', '<', $value)->get();
		return view('farmacia.products', compact('products'));

	}//end order by price
	
	
	public function email(Request $request){
		
	}//end emial
	
	public function setContador($contadorCarrito){
		//Le damos un valor a un atributo
        $this->contadorCarrito = $contadorCarrito;
    }
	
	public function orderProducts($value){
		
		if($value == 1){
			$products = Product::orderBy('precio', 'DESC')->get();
			
			return view('farmacia.products', compact('products'));
		}//end if
		
		if ($value = 2){
			$products = Product::orderBy('precio', 'ASC')->get();
			return view('farmacia.products', compact('products'));
		}//end if
		
		
	}//end orderProduct

	
	public function comprar(){
		return view('farmacia.buy');
	}//end comprar
	
	public function mostratProducto($id){
		$product = Product::find($id);
        return view('farmacia.oneproduct', compact('product'));
	}//end mostrar productos
	
    public function products(){
		$products = Product::all();
        return view('farmacia.products', compact('products'));
    }//end products
	
	public function rawMaterials(){
		$rawMaterials = Rawmaterial::all();
        return view('farmacia.raw_materials', compact('rawMaterials'));
    }//end raw material
	
	public function howWeDo(){
		$tutorial = Tutorial::all();
        return view('farmacia.how_we_do', compact('tutorial'));
    }//end howwedo
	
	public function whoWeAre(){
        return view('farmacia.who_we_are');
    }//end who we are
	
	public function collaborators(){
		$collaborators = Collaborator::all();
        return view('farmacia.collaborators', compact('collaborators'));
    }//end collabortors
	
	public function projectCez(){
        return view('farmacia.project_cez');
    }//end project_cez
	
	public function contact(){
        return view('farmacia.contact');
    }//end contact
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
		$images = Slider::all();
		$products = Product::all()->take(4);
        return view('welcome', compact('images', 'products'));
    }//end index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$products = Product::all();
		dd($products);
        return view('farmacia.oneproduct', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
