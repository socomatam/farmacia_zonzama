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

		<form id="return_home" action="{{url('/')}}" method="GET">
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
					<input type="submit" value="Salir">
				</form>
			@endisset
				
			@if(!isset(auth()->user()->name))
				<form class="form_login" action="{{url('/login')}}">
					<input type="submit" value="Entrar">
				</form>
			@endisset
			</div>

		</form>
		
		<spam  id="car_user_id" style="visibility: hidden;">{{ auth()->user()->email}} </spam>

		<div class="web_content">
			<div class="end_buy">
				<div>
					<table>
						<tr>
							<th class="buy_th" colspan="2">Artículo</th>

							<th>Precio</th>
							<th>Unidades</th>
							<th>Total</th>
						</tr>
						{{$i =0}} 
						@foreach($grupo as $c)
						<tr>
							<td class="buy_img">
								<img src="{{asset('/assets/img/products/'.$c->imagen , true) }}">
							</td>
							<td>{{$c->nombre_es}}</td>
							<td>{{$c->precio}} €</td>
							<td>
								<i class="fas fa-plus"></i>{{$aux[$i]}}
								<i class="fas fa-minus"></i>
							</td>
							<td>{{$c->precio * $aux[$i]}} €</td>
						</tr>
						{{$i++}} @endforeach
					</table>

					<form action="{{url('/deletecar')}}" method="GET">
						<input type="submit" value="Borrar carrito">
					</form>
					<button>Vaciar cesta</button>

				</div>
				<div>
					<div>
						<span>Total</span>
						<span class="total_price">{{$total}}</span>
					</div>
					<button>
						Finalizar compra
					</button>
				</div>
			</div>
		</div>

		<!--end web_content-->

	</div>
</body>

</html>