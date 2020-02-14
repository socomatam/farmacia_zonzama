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

		
		
		

		<div class="web_content">
			<div class="end_buy">
				<div class="tabla_carro">
					<table>
						<tr>
							<th class="buy_th" colspan="2" width="200">Artículo</th>

							<th width="100">Precio</th>
							<th width="100">Unidades</th>
							<th width="100">Total</th>
						</tr>
						<spam class="hide_price">{{$i =0}}  </spam>
						@foreach($grupo as $c)
						<tr>
							<td class="buy_img">
								<img src="{{asset('/assets/img/products/'.$c->imagen , true) }}">
							</td>

							@if($_SESSION["lang"] == "espanol")
								<td>{{$c->nombre_es}}</td>
							@elseif($_SESSION["lang"] == "english")
								<td>{{$c->nombre_en}}</td>
							@elseif($_SESSION["lang"] == "deutsch")
								<td>{{$c->nombre_de}}</td>					
							@endif

							<td>{{$c->precio}} €</td>
							<td>
								<i class="fas fa-plus"></i>{{$aux[$i]}}
								<i class="fas fa-minus"></i>
							</td>
							<td>{{$c->precio * $aux[$i]}} €</td>
						</tr>
						<spam class="hide_price">{{$i++}}</spam>
						
						@endforeach
	
					</table>

					<form action="{{url('/deletecar')}}" method="GET">
						<input class="btn_delete_cart"  type="submit" value="Borrar carrito">
					</form>
					
					<form action="{{url('/products')}}">
						<input class="btn_keep_buying"  type="submit" value="Seguir comprando">
					</form>
					
				</div>
				<div>
					<div class="finish_buy">
						<span>Total</span>
						<span class="total_price">{{$totals ?? '0'}} €</span>
					</div>
					<button class="btn_end_buy">
						Finalizar compra
					</button>
				</div>
			</div>
		</div>

	

	</div>
</body>

</html>