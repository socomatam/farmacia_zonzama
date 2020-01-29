@extends('layouts.app') 
@section('content')

	<div class="one_product">
		<div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->miniatura_1)) }}">			
			</div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->miniatura_2)) }}">
			</div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->miniatura_3)) }}">
			</div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->miniatura_4)) }}">
			</div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->miniatura_5)) }}">
			</div>
		</div>
		<div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->imagen)) }}">
			</div>
			
			<div class="btn_oneproduct">
				<button class="btn_carrito"><i class="fas fa-cart-plus"></i> Añadir al carro</button>
				<button><a href="{{url('/buy')}}">Comprar ahora</a></button>
			</div>
			
			
		</div>
		<div>
			<h3>{{$product->nombre}} </h3>
			<h2>{{$product->precio}} €</h2>
			<h3>Información del producto</h3>
			<div>{{$product->descripcion}}</div>
		</div>
	</div>

	<div class="comentarios">
		
	</div>

@endsection