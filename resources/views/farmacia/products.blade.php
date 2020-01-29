

@extends('layouts.app') 

@section('selector')
<div class="top">
		<div>
			<span>Productos cosmética</span>
			<span></span>
			<span>Ordenar por</span>
			<form>
				<select class="order_products">
					<option>Precio</option>
					<option value="1">Mayor precio</option>
					<option value="2">Menor precio</option>
				</select>
			</form>
		</div>
	</div>
@endsection
@section('content')
<div class="section">

	

	<div class="prueba">
		<div class="filter">
			<div>11111111</div>
		</div>

		<div class="items">

			@foreach($products as $p)
			<div>
				<a href="{{url('/item')}}/{{$p->id}}">
					<img src="data:image/png;base64,{{ chunk_split(base64_encode($p->imagen)) }}">
				</a>
				<a href="https://developer.mozilla.org">
					<p>{{$p->nombre}}</p>
				</a>
				<p>{{$p->precio}} €</p>
			</div>
			@endforeach

		</div>
	</div>

</div>

<style>
	#productos {
		color: white;
	}
</style>

@endsection