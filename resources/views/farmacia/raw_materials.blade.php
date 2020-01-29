@extends('layouts.app') @section('content')
<div class="raw_materials">
	
	@foreach($rawMaterials as $raw) 
		@if($raw->id % 2 != 0 )
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($raw->imagen)) }}">
			</div>
			<div>
				<h3>{{$raw->nombre}}</h3>
				<p>{{$raw->descripcion}} </p>

				<button>Mostrar mรกs</button>
			</div>
		@else
			<div>
				<h3>{{$raw->nombre}}</h3>
				<p>{{$raw->descripcion}} </p>

				<button>Mostrar mรกs</button>
			</div>
			<div>
				<img src="data:image/png;base64,{{ chunk_split(base64_encode($raw->imagen)) }}">
			</div>
		@endif 
	@endforeach
</div>
<style>
	#materias{
		color:white;
	}
</style>

@endsection