@extends('layouts.app') 
@section('content')

	<div class="one_product">
		<div>
			<div>
				1			
			</div>
			<div>
				2
			</div>
			<div>
				3
			</div>
		</div>
		<div>
			<img src="data:image/png;base64,{{ chunk_split(base64_encode($product->imagen)) }}">
			<button>
				s
			</button>
			<button>
				s
			</button>
		</div>
		<div>
			<h3>{{$product->nombre}} </h3>
			<h2>{{$product->precio}} €</h2>
			<h3>Información del producto</h3>
			<p>{{$product->descripcion}}</p>
		</div>
	</div>

@endsection