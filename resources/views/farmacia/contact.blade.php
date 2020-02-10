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

</head>

<body>
	<?php 
		session_start();
		if(!isset($_SESSION["lang"])){
			$_SESSION["lang"]="espanol";
			echo "hola";
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
				<a class="carrito" href="{{url('/buy')}}">
					<i class="fas fa-shopping-cart"></i>
				</a>

			</div>

			<div class="web_content">
				<div class="contact">
					<div>
						<h2 class="lang_contact_lo">Localización</h2>

						<iframe height="250" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1234.140440968978!2d-13.56113070123452!3d28.967324126848492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1579545574599!5m2!1ses!2ses" frameborder="0" allowfullscreen=""></iframe>
						<br>
						<br>
						<i class="fas fa-map-marker-alt">
							<span> Calle Dr. Barraquer, 6, 35500 Arrecife, Las Palmas</span>
						</i>
						<br>
						<br>
						<i class="fas fa-envelope">
							<span> cifpzonzamas@mail.com</span>
						</i>
						<br>
						<br>
						<i class="fas fa-phone-square">
							<span> 928 81 31 14</span>
						</i>

					</div>

					<hr>

					<div>
						<h2 class="lang_contact_con">Contáctenos</h2>
						<form class="form_contact">

							<input class="lang_contact_nom" type="text" name="name" placeholder="Nombre">
							<br>
							<input class="lang_contact_emi"  type="text" name="name" placeholder="Email">
							<br>
							<textarea rows="10" placeholder=""></textarea>
							<br>
							<br>
							<input class="lang_contact_env" type="submit" name="send" value="Enviar">
						</form>
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
	#contacto {
		color: white;
	}
</style>