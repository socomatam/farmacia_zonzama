@extends('layouts.app')
@section('content')
<div class="collaborators">
	
	@foreach($collaborators as $c)
		<div>
			<img src="data:image/png;base64,{{ chunk_split(base64_encode($c->logo)) }}">
			<h3>{{ $c->nombre }}</h3>
			<p>{{$c->descripcion}} </p>
		</div>
	@endforeach
	
</div>
<style>
	#colaboradores{
		color:white;
	}
</style>
@endsection