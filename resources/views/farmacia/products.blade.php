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
	
	<!--Vue products-->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="{{ asset('/assets/js/vue_product.js',true)}}"></script>
	
</head>

<body>
	

	<?php 
		session_start();
		if(!isset($_SESSION["lang"])){
			$_SESSION["lang"]="espanol";
		}
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

				<div class="top">
					<div>
						<span class="lang_product_pc">Productos cosmética</span>
						<span></span>
						<span class="lang_product_op">Ordenar por</span>
						<form>
							<select class="order_products">
								<option class="lang_product_p">Precio</option>
								<option Class="lang_product_price1" value="1">Mayor precio</option>
								<option class="lang_product_price2" value="2">Menor precio</option>
							</select>
						</form>
					</div>
				</div>

				<div class="product_container">

					<div id="list_categorie" class="filter">
						<h3 class="h3_filter">Filtros</h3>
						<h4><b class="categories">Categorías</b></h4>
  							
						<h5 v-for="item in items">
    						@{{ item.category }}					
						</h5>
						
					
						<br>
						
						<label class="lab_price">Rango de precio</label><br>
						<span>5€</span>
						<input type="range" name="range_price" min="0" max="1000" step="10">
						<span>1000€</span><br>
					</div>

					<div class="section">

						<div class="prueba">

							<div class="items">

								@foreach($products as $p)
								<div>
									<a href="{{url('/item')}}/{{$p->id}}">
										<img src="{{asset('/assets/img/products/'.$p->imagen , true) }}">
									</a>
									<a href="{{url('/item')}}/{{$p->id}}">

										@if($_SESSION["lang"] == "espanol")
										<p>{{$p->nombre_es}}</p>
										@elseif($_SESSION["lang"] == "english")
										<p>{{$p->nombre_en}}</p>
										@elseif($_SESSION["lang"] == "deutsch")
										<p>{{$p->nombre_de}}</p>
										@endif
									</a>
									<p>{{$p->precio}} €</p>
								</div>
								@endforeach

							</div>

						</div>

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

<style>
	#productos {
		color: white;
	}
</style>