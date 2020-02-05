$(document).ready(function() {

	 setLenguge();
	
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
	
	
	
	
	
	
	//Set layout lenguage
	
	$('.cabecera select').change(function(){
		var value = $('.cabecera select option:selected').val();
		console.log(value);
		
		if(value == 'english'){
			sessionStorage.setItem('lenguage', 'english');
			setLenguge();
		}else if(value == 'espanol'){
			sessionStorage.setItem('lenguage', 'espanol');
			setLenguge();
		}else if(value == 'deutsch'){
			sessionStorage.setItem('lenguage', 'deutsch');
			setLenguge();
		}//end else if
		
		
	});//end change
	
	$('.send select').change(function() {	
		$('.send').submit();
	});//end submit
	

}); //end jquery