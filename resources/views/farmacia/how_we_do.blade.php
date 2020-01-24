@extends('layouts.app') 
@section('content')
	<div class="how_we_do">
		@foreach($tutorial as $t)
			<div>
				<iframe class="how_we_do_video" height="250" src="{{$t->url_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<h3>{{$t->nombre}}</h3>
				<i class="fas fa-heart"></i>
				<i class="fas fa-share"></i>
				<p>{{$t->descripcion}}</p>
			</div>

		@endforeach
	</div>
<style>
	#como{
		color:white;
	}
</style>
@endsection