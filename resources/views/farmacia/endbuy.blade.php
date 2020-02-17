<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Farmacia Zonzamas</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/app.css', true) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/variable_web_content.css', true) }}">
	<script src="https://kit.fontawesome.com/63246e723f.js" crossorigin="anonymous"></script>
	<script src="{{ asset('/assets/js/app.js',true)}}"></script>
	<script src="{{ asset('/assets/js/slider_index.js',true)}}"></script>

	<script src="{{ asset('/assets/js/translate.js',true)}}"></script>

	<!--Librerías toars-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
	
	<!--Buy form-->
	<script src="{{ asset('/assets/js/buy_form.js',true)}}"></script>
	
	<!--Vue-->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="{{ asset('/assets/js/vue_endbuy.js',true)}}"></script>
	
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
			@endisset @if(!isset(auth()->user()->name))
			<form class="form_login" action="{{url('/login')}}">
				<input class="log_in" type="submit" value="Entrar">
			</form>
			@endisset
		</div>

		<div class="web_content">
			<div class="end_buy">
				<div class="tabla_carro">
					<div id="app_endbuy" class="buy_form">
						<buy 
							
							 name="Nombre"
							 surname="Apellido"
							 dni="DNI"
							 born="Fecha de nacimiento"
							 postal_code="Código Postal"
							 email="E-mail"
							 phone="Teléfono"
							 credit_card="Tarjeta de crédito"
						>
						
						</buy>
						
					</div>

				</div>
				<div>

				</div>
			</div>
		</div>

	</div>
</body>

</html>