<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Farmacia Zonzamas</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/app.css', true) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/variable_web_content.css', true) }}">
	<script src="https://kit.fontawesome.com/63246e723f.js" crossorigin="anonymous"></script>
	<script src="{{ asset('/assets/js/app.js',true)}}"></script>
	<script src="{{ asset('/assets/js/slider_index.js',true)}}"></script>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<script src="{{ asset('/assets/js/translate.js',true)}}"></script>
	
	<!--Librerías toars-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

</head>

<body>

	<?php 
			session_start();
			if(!isset($_SESSION["lang"])){
				$_SESSION["lang"]="espanol";
				echo "hola";
			}//end if
		?>
	<div class="container">
			<div class="cabecera">
			<!--<img src="img/banner.png">-->
			<form class="send" action="#" method="GET">
				<select name="selected_lang">
					<option>Idioma</option>
					<option value="espanol">Español</option>
					<option value="deutsch">Deutsch</option>
					<option value="english">English</option>
				</select>
			</form>
			@if(isset(auth()->user()->name))
				<form class="form_login" action="{{url('/logout')}}" method="POST">
					<input class="log_out" type="submit" value="Salir">
				</form>
			@endisset
				
			@if(!isset(auth()->user()->name))
				<form class="form_login" action="{{url('/login')}}">
					<input class="log_in"  type="submit" value="Entrar">
				</form>
			@endisset
		</div>

		<?php
				
					if(isset($_GET['selected_lang'])){
						$lang = $_GET['selected_lang'];
					
						if($lang == "espanol"){
							$_SESSION["lang"]=$lang;

						}else if($lang == "deutsch"){
							$_SESSION["lang"]=$lang;
						}else if($lang == "english"){
							$_SESSION["lang"]=$lang;
						}
				
					}else{
					
					}	
				?>

			<div class="barra_menu">
				<a href="">
					<i class="fas fa-bars"></i>
				</a>
				<a id="inicio" href="{{ url('/') }}">
					<i class="fas fa-home"></i>
					<span>Inicio</span>
				</a>

				<a id="productos" href="{{ url('/products') }}">
					<i class="fas fa-tags"></i>
					<span>Productos</span>
				</a>
				<a id="materias" href="{{ url('/rawmaterials') }}">
					<i class="fas fa-truck"></i>
					<span>Materias Primas</span>
				</a>
				<a id="como" href="{{ url('/howwedo') }}">
					<i class="fas fa-flask"></i>
					<span>¿Cómo lo hacemos?</span>
				</a>
				<a class="ct_carrito">
					<span></span>
				</a>
					@if(isset(auth()->user()->id))
					<a class="carrito" href="{{url('/buy')}}/{{auth()->user()->id}}">
						<i class="fas fa-shopping-cart"></i>
					</a>
				@endisset
				
				@if(!isset(auth()->user()->id))
					<a class="carrito_enpty">
						<i class="fas fa-shopping-cart"></i>
					</a>
				@endisset

			</div>

			<div class="web_content">
				<div class="how_we_do">
					@foreach($tutorial as $t)
					<div>
						<iframe class="how_we_do_video" height="250" src="{{$t->url_video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
						
						@if($_SESSION["lang"] == "espanol")				
							<h3>{{$t->nombre_es}}</h3>
							<i class="fas fa-heart"></i>
							<i class="fas fa-share"></i>
							<p>{{$t->descripcion_es}}</p>
						@elseif($_SESSION["lang"] == "english")
							<h3>{{$t->nombre_en}}</h3>
							<i class="fas fa-heart"></i>
							<i class="fas fa-share"></i>
							<p>{{$t->descripcion_en}}</p>
						@elseif($_SESSION["lang"] == "deutsch")
							<h3>{{$t->nombre_de}}</h3>
							<i class="fas fa-heart"></i>
							<i class="fas fa-share"></i>
							<p>{{$t->descripcion_de}}</p>
						@endif
					</div>

					@endforeach
				</div>
			</div>

			<!--end web_content-->

			<div class="pie_pagina">
				<a id="quien" href="{{ url('/whoweare') }}">
					<i class="fas fa-question-circle"></i>
					<span>¿Quiénes somos?</span>
				</a> |
				<a id="colaboradores" href="{{ url('/collaborators') }}">
					<i class="fas fa-users"></i>
					<span>Colaboradores</span>
				</a> |
				<a id="proyecto_cez" href="{{ url('/projectcez') }}">
					<i class="fas fa-user-graduate"></i>
					<span>Proyecto CEZ</span>
				</a> |
				<a id="contacto" href="{{ url('/contact') }}">
					<i class="fas fa-phone-alt"></i>
					<span>Contacto</span>
				</a>
			</div>
	</div>
</body>

</html>

<style>
	#como {
		color: white;
	}
</style>