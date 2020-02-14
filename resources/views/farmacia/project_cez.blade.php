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
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>
						<img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
						<div class="text">Caption Text</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<img src="https://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
						<div class="text">Caption Two</div>
					</div>

					<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<img src="https://www.w3schools.com/howto/img_lights_wide.jpg" style="width:100%">
						<div class="text">Caption Three</div>
					</div>

					<a class="prev">&#10094;</a>
					<a class="next">&#10095;</a>

				</div>
				<br>

				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>
				
				

						@if($_SESSION["lang"] == "espanol")				
							<div class="project_text">
								INTRODUCCION DEL PROYECTO<br>
El taller de Innovación llamado "Cosmética Educativa Zonzamas" (ZEC / CEZ) es un proyecto alentado por el Departamento de Salud de CIFP Zonzamas y apoyado principalmente por estudiantes de segundo año de la CFGM de Farmacia y Parafarmacia a través de la asignatura de Formulación Maestra. Este proyecto multidisciplinario y colaborativo tiene como objetivo crear vínculos con el sector empresarial parafarmacéutico de la isla a través del desarrollo de una gama de cinco productos cosméticos fabricados en nuestra escuela bajo la identidad ZEC. Además, para cumplir e integrar el proyecto, se ha involucrado a estudiantes de diferentes cursos y calificaciones profesionales (salud, comercio y marketing, imagen personal y cuidado de la belleza, seguridad y medio ambiente, lenguas extranjeras, industrias alimentarias y TIC), y en cooperación con dos escuelas (IES Magallanes de Tenerife y CIFP Majada Marcial de Fuerteventura). Además, la participación de la empresa "Aloe Plus Lanzarote" y la asociación "Milana" de Lanzarote ha sido fundamental.
							</div>
						@elseif($_SESSION["lang"] == "english")
							<div class="project_text">
								INTRODUCTION OF THE PROJECT
								<br>
The Innovation workshop called “Zonzamas Educational Cosmetics” (ZEC/CEZ) is a project encouraged by the Health Department at CIFP Zonzamas and supported mainly by the second year students of the CFGM of Pharmacy and Parapharmacy through the subject of Master Formulation.
This multidisciplinary and collaborative project aims to create bonds with the Parapharmaceutical business sector of the island through the development of a range of five cosmetic products made in our school under the ZEC identity.
In addition, to fulfill and integrate the project, students from different professional courses and grades have been involved (Health, Commerce and Marketing, Personal Image and Beauty Care, Security and Environment, Foreign Languages, Food Industries, and ICT), and cooperatively with two schools (IES Magallanes from Tenerife and CIFP Majada Marcial from Fuerteventura). Furthermore, the involvement of the company “Aloe Plus Lanzarote” and the association “Milana” from Lanzarote has been fundamental.
							</div>
						@elseif($_SESSION["lang"] == "deutsch")
							<div class="project_text">
								
EINLEITUNG DES PROJEKTS<br>
Der Innovationsworkshop mit dem Titel „Zonzamas Educational Cosmetics“ (ZEC / CEZ) ist ein Projekt, das vom Gesundheitsamt von CIFP Zonzamas gefördert und hauptsächlich von Studenten des zweiten Studienjahres der CFGM für Pharmazie und Parapharmazie durch das Thema Masterformulierung unterstützt wird. Dieses multidisziplinäre und kollaborative Projekt zielt darauf ab, durch die Entwicklung einer Reihe von fünf Kosmetikprodukten, die in unserer Schule unter der ZEC-Identität hergestellt werden, Verbindungen zum parapharmazeutischen Geschäftsbereich der Insel herzustellen. Um das Projekt zu erfüllen und zu integrieren, wurden Studenten aus verschiedenen professionellen Kursen und Klassen (Gesundheit, Handel und Marketing, persönliche Image- und Schönheitspflege, Sicherheit und Umwelt, Fremdsprachen, Lebensmittelindustrie und IKT) und kooperativ mit einbezogen zwei Schulen (IES Magallanes aus Teneriffa und CIFP Majada Marcial aus Fuerteventura). Darüber hinaus war das Engagement der Firma „Aloe Plus Lanzarote“ und des Vereins „Milana“ aus Lanzarote von grundlegender Bedeutung.
							</div>
						@endif

					
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
	#proyecto_cez {
		color: white;
	}
</style>