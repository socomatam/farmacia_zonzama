$(document).ready(function() {
	
	//actual lenguge selected
	setLenguge();
	$('.send select').change(function() {
				//var value = $('.send select option:selected').val();
				//alert(value);
				$('.send').submit();
	});
	
	
	
	
	function setLenguge(){
		var lenguage = sessionStorage.getItem('lenguage');
		if(lenguage == 'english'){
	    	$('.barra_menu a:nth-child(2) span').text('Home');
	  		$('.barra_menu a:nth-child(3) span').text('Products');
			$('.barra_menu a:nth-child(4) span').text('Producer Goods');
			$('.barra_menu a:nth-child(5) span').text('How do we do it?');
			$('.pie_pagina a:nth-child(1) span').text('About us?');
			$('.pie_pagina a:nth-child(2) span').text('Collaborators');
			$('.pie_pagina a:nth-child(3) span').text('Project CEZ');
			$('.pie_pagina a:nth-child(4) span').text('Contact us');
			
	 	}else if(lenguage == 'deutsch'){
			$('.barra_menu a:nth-child(2) span').text('Main');
	  		$('.barra_menu a:nth-child(3) span').text('Produkte');
			$('.barra_menu a:nth-child(4) span').text('Rohstoffe');
			$('.barra_menu a:nth-child(5) span').text('Wie machen wir das?');
			$('.pie_pagina a:nth-child(1) span').text('wer sind wir?');
			$('.pie_pagina a:nth-child(2) span').text('Mitarbeiter');
			$('.pie_pagina a:nth-child(3) span').text('Projekt CEZ');
			$('.pie_pagina a:nth-child(4) span').text('Sprechen Sie mit uns');
		}else if(lenguage == 'espanol'){
			$('.barra_menu a:nth-child(2) span').text('Inicio');
	  		$('.barra_menu a:nth-child(3) span').text('Productos');
			$('.barra_menu a:nth-child(4) span').text('Materias Primas');
			$('.barra_menu a:nth-child(5) span').text('Cómo lo hacemos?');
			$('.pie_pagina a:nth-child(1) span').text('¿Quiénes somos?');
			$('.pie_pagina a:nth-child(2) span').text('Colaboradores');
			$('.pie_pagina a:nth-child(3) span').text('Proyect0 CEZ');
			$('.pie_pagina a:nth-child(4) span').text('Contacto'); 
		}//end else if

	}//end setLenguaje
	
	
	
	$('.borrar').click(function() {
		if (localStorage.clickcount) {
			localStorage.clickcount = 0;
		} else {
			localStorage.clickcount = 0;
		}

		$('.ct_carrito span').text(localStorage.clickcount);
	}); //end click

	$('.btn_carrito').click(function() {
		if (localStorage.clickcount) {
			localStorage.clickcount = Number(localStorage.clickcount) + 1;
		} else {
			localStorage.clickcount = 1;
		}

		$('.ct_carrito span').text(localStorage.clickcount);
	}); //end click
	
	//order all products by price
	$('.order_products').change(function(){
		var value = $('.order_products option:selected').val();
		
		$.ajax({
			url: "/orderproducts/"+value,
			success: function(response) {
				$('.section').html(response);
			} //fin succces
		}); //end ajax
	});//end click
	
	//Set layout lenguage
	
	$('.cabecera select').change(function(){
		var value = $('.cabecera select option:selected').val();
		
		if(value == 'English'){
			sessionStorage.setItem('lenguage', 'english');
			setLenguge();
		}else if(value == 'Español'){
			sessionStorage.setItem('lenguage', 'espanol');
			setLenguge();
		}else if(value == 'Deutsch'){
			sessionStorage.setItem('lenguage', 'deutsch');
			setLenguge();
		}//end else if
		
		
	});//end change

	//Send an email
	$('.form_contact input[type="submit"]').click(function(event){
		event.preventDefault();
		
		var contact =  $('.form_contact input:nth-child(1)').val();
		var email =  $('.form_contact input:nth-child(2)').val();
		
		console.log(contacto);
		var mensaje = "d";
		
		$.ajax({
			method: "POST",
			url:    "/farmacia/email",
			data:	{
						email: email,
						contact: contact,
						mensaje: mensaje,
						
					},
			
			success: function(){
				 
			},//fin succces
		});//fin ajax
	});//end click
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	var slideIndex = 1;
	showSlides(slideIndex);


	
	$(".next").click(function(){
		showSlides(slideIndex += 1);
	});//end next

	$(".prev").click(function(){
		showSlides(slideIndex -= 1);
	});//end prev
	

	var sliderTimer = setInterval(autoSlider, 2000);

	function autoSlider(){
		showSlides(slideIndex += 1);
	}//end auto slider

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {
		  	    slideIndex = 1
		}//end if 

		if (n < 1) {
			slideIndex = slides.length
		}// end if
		
		for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		}// end for
		
		for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		}//end for
		    slides[slideIndex-1].style.display = "block";  
		    dots[slideIndex-1].className += " active";
	}//end showSlide
	*/
}); //end jquery