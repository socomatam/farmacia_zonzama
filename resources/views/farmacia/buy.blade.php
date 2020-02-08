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
				<select>
					<option>Idioma</option>
					<option>Inglés</option>
					<option>Español</option>
				</select>
			
			</div>
	
			

			<div class="web_content">
				<div class="end_buy">
					<div>
						<table>
							<tr>
								<th>Artículo</th>
								
								<th>Precio</th>
								<th>Unidades</th>
								<th>Total</th>
							</tr>
							@foreach($carrito as $c)
							<tr>
								<td>{{$c->nombre_es}}</td>
								
								<td class="buy_img"><img src="{{asset('/assets/img/products/'.$c->imagen , true) }}"></td>
								<td>{{$c->precio}}</td>
								<td>{{$c->precio}}</td>
								<td>{{$c->precio}}</td>
							</tr>
								
							
							@endforeach
						</table>
					</div>
					<div>
						s
					</div>
				</div>
			</div>


			<!--end web_content-->
			
			
		</div>
	</body>
</html> 






