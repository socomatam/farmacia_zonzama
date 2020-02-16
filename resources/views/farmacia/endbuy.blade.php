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
					<div id="registration">

						<form>
							<label>Username: </label>
							<input type="text" name="username" placeholder="Username">
							<p style="display:none">Username must be and contain 5 - 12 characters</p>
							<br>
							<label>Surname: </label>
							<input type="text" name="surname" placeholder="Surname">
							<p style="display:none">Surname must be and contain 5 - 12 characters</p>
							<br>
							<label>Id card name: </label>
							<input type="text" name="id_card_name" placeholder="Id card name">
							<p style="display:none">Must contain 9 numbers and one letter</p>
							<br>
							<label>Data of bird: </label>
							<input type="text" name="date_of_bird" placeholder="Date of bird">
							<p style="display:none">Format must be: dd/mm/yyyy</p>
							<br>
							<label>Postal code: </label>
							<input type="text" name="postal_code" placeholder="Postal Code">
							<p style="display:none">The first two numbers must not exceed numeber 52. Example: 35500 </p>
							<br>
							<label>E-mail: </label>
							<input type="text" name="email" placeholder="Email">
							<p style="display:none">Example: mail@mail.com</p>
							<br>
							<label>Telephone: </label>
							<input type="text" name="telephone" placeholder="Telephone">
							<p style="display:none">8XXXXXXXX or 9XXXXXXXX</p>
							<br>
							<label>Movile: </label>
							<input type="text" name="movil" placeholder="Movil">
							<p style="display:none">Example: 612333333</p>
							<br>
							<label>IBAN: </label>
							<input type="text" name="iban" placeholder="IBAN">
							<p style="display:none">Example: ES9820385778983000760236</p>
							<br>
							<label>Credit card: </label>
							<input type="text" name="credit_card" placeholder="Credit Card">
							<p style="display:none">Example: 1234 1234 1234 1234</p>
							<br>

						</form>
					</div>

				</div>
				<div>

				</div>
			</div>
		</div>

	</div>
</body>

</html>