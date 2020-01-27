@extends('layouts.app') @section('content')

<div class="top">
	<div>
		<span>Productos cosmética</span>
		<span></span>
		<span>Ordenar por</span>
		<form>
			<select>
				<option>1</option>
			</select>
		</form>
	</div>
</div>

<div class="prueba">
	<div class="filter">
		<div>11111111</div>
	</div>

	<div class="items">
		
		@foreach($products as $p)
			<div>
				<a href="{{url('/item')}}/{{$p->id}}"><img src="data:image/png;base64,{{ chunk_split(base64_encode($p->imagen)) }}"></a>
				<a href="https://developer.mozilla.org"><p>{{$p->nombre}}</p></a>
				<p>{{$p->precio}} €</p>
			</div>
		@endforeach

	</div>
</div>

<style>
	#productos{
		color:white;
	}
</style>

@endsection