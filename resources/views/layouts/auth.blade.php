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
		
		<!--
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
-->

		
	</head>

	<body>
		<div class="container">
			<div class="cabecera">
				<!--<img src="img/banner.png">-->
				<select>
					<option>Idioma</option>
					<option>Inglés</option>
					<option>Español</option>
				</select>
			
			</div>
	
			

			<div class="web_content">
				@yield('content')
			</div>


			<!--end web_content-->
			
			
		</div>
	</body>
</html> 



