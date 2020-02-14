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

	@if(isset(auth()->user()->name))
				<spam class="id_register">{{auth()->user()->id}}</spam>
			@endisset
	<?php 
		session_start();
		if(!isset($_SESSION["lang"])){
			$_SESSION["lang"]="espanol";
			
		}
	?>
	<div class="container">
		<div class="cabecera">

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
			@endisset @if(!isset(auth()->user()->name))
			<form class="form_login" action="{{url('/login')}}">
				<input class="log_in" type="submit" value="Entrar">
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
						}//en else if
				
			
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
				@endisset @if(!isset(auth()->user()->id))
				<a class="carrito_enpty">
					<i class="fas fa-shopping-cart"></i>
				</a>
				@endisset

			</div>

			<div class="web_content">
				<div class="one_product">
					<div>
						<div>
							<img src="{{asset('/assets/img/products/'.$product->miniatura_1 , true) }}">
						</div>
						<div>
							<img src="{{asset('/assets/img/products/'.$product->miniatura_2 , true) }}">
						</div>
						<div>
							<img src="{{asset('/assets/img/products/'.$product->miniatura_3 , true) }}">
						</div>
						<div>
							<img src="{{asset('/assets/img/products/'.$product->miniatura_4 , true) }}">
						</div>
						<div>
							<img src="{{asset('/assets/img/products/'.$product->miniatura_5 , true) }}">
						</div>
					</div>
					<div>
						<div>

							<img src="{{asset('/assets/img/products/'.$product->imagen , true) }}">
						</div>

						<div class="btn_oneproduct">
							<button class="btn_carrito">
								<i class="fas fa-cart-plus"></i> Añadir al carro
							</button>
							
							@if(isset(auth()->user()->id))
							<button class="">
								<a class="btn_carrito btn_shop" href="{{url('/buy')}}/{{auth()->user()->id}}">Comprar ahora</a>
							</button>
							@endisset @if(!isset(auth()->user()->id))
							
							<button class="carrito_enpty btn_shop">
								Comprar ahora
							</button>
							@endisset
							

							

						</div>

					</div>
					<div>
						@if($_SESSION["lang"] == "espanol")
						<h3 class="one_name">{{$product->nombre_es}} </h3>
						<h2>
							<span class="one_price">{{$product->precio}}</span>€</h2>
						<h3 class="lang_contact_inf">Información del producto</h3>
						<span>ID producto </span>
						<span class="id_product">{{$product->id}}</span>
						<div>{{$product->descripcion_es}}</div>
						@elseif($_SESSION["lang"] == "english")
						<h3 class="one_name">{{$product->nombre_en}} </h3>
						<h2>
							<span class="one_price">{{$product->precio}}</span>€</h2>
						<h3 class="lang_contact_inf">Información del producto</h3>
						<span>ID producto </span>
						<span class="id_product">{{$product->id}}</span>
						<div>{{$product->descripcion_en}}</div>

						@elseif($_SESSION["lang"] == "deutsch")
						<h3 class="one_name">{{$product->nombre_de}} </h3>
						<h2>
							<span class="one_price">{{$product->precio}}</span>€</h2>
						<h3 class="lang_contact_inf">Información del producto</h3>
						<span>ID producto </span>
						<span class="id_product">{{$product->id}}</span>
						<div>{{$product->descripcion_de}}</div>

						@endif

					</div>
				</div>

				<div class="one_products_comments">
					<p class="one_product_com">
						<b>Opiniones de los compradores</b>
					</p>
					@if(isset(auth()->user()->name))
					<p>
						{{auth()->user()->name}}
					</p>
					@endisset @if(!isset(auth()->user()->name))
					<p>
						
					</p>
					@endisset

					<div class="coments">
						@if($_SESSION["lang"] == "espanol")
							<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSebuNCFlcILxuGsSGShzVP5ETv1g1oqyXSQSQzxGKhEwhp4HA/viewform?embedded=true" height="400" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
						@elseif($_SESSION["lang"] == "english")
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSevPr2MG2viQhPEOA9Y4lKsfaqyv3kmE5VxdAsdqRF9qpvDbA/viewform?embedded=true"  height="400" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
						@elseif($_SESSION["lang"] == "deutsch")
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScRHgaprrmflcEJfhAi08TqOlKEWVilWfnza-LZaVjSipLkiA/viewform?embedded=true"  height="400" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
						@endif
						
						
						
						
						
						
						
					</div>
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