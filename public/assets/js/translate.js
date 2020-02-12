$(document).ready(function() {

	 setLenguge();
	
	function setLenguge(){
		var lenguage = sessionStorage.getItem('lenguage');
		if(lenguage == 'english'){
			
			$('.send select > option:first-child').text('Lenguage');
	    	$('.barra_menu a:nth-child(2) span').text('Home');
	  		$('.barra_menu a:nth-child(3) span').text('Products');
			$('.barra_menu a:nth-child(4) span').text('Producer Goods');
			$('.barra_menu a:nth-child(5) span').text('How do we do it?');
			$('.pie_pagina a:nth-child(1) span').text('About us?');
			$('.pie_pagina a:nth-child(2) span').text('Collaborators');
			$('.pie_pagina a:nth-child(3) span').text('Project CEZ');
			$('.pie_pagina a:nth-child(4) span').text('Contact us');
			$('.lang_product_pc').text('Cosmetic products');
			$('.lang_product_op').text('Sort By');
			$('.lang_product_price1').text('higher price');
			$('.lang_product_price2').text('lower price');
			$('.lang_product_p').text('price');
			$('.lang_contact_lo').text('Location');
			$('.lang_contact_con').text('Contact us');
			$('.lang_contact_env').attr("value", "Send");
			$('.lang_contact_nom').attr("placeholder", "Name");
		
			$('.btn_carrito').text("To cart");
			$('.btn_shop').text("Buy now");
			$('.lang_contact_inf').text("Product information");
			$('.one_product_com').html("<b>Buyers' opinions</b>");
			$('.log_out').val("Logout");
			$('.log_in').val("Login");
			$('.btn_mm').text("Show more");
			
		
			
	 	}else if(lenguage == 'deutsch'){
			
			$('.send select option:first-child').text('Sprache');
			$('.barra_menu a:nth-child(2) span').text('Main');
	  		$('.barra_menu a:nth-child(3) span').text('Produkte');
			$('.barra_menu a:nth-child(4) span').text('Rohstoffe');
			$('.barra_menu a:nth-child(5) span').text('Wie machen wir das?');
			$('.pie_pagina a:nth-child(1) span').text('wer sind wir?');
			$('.pie_pagina a:nth-child(2) span').text('Mitarbeiter');
			$('.pie_pagina a:nth-child(3) span').text('Projekt CEZ');
			$('.pie_pagina a:nth-child(4) span').text('Sprechen Sie mit uns');
			$('.lang_product_pc').text('Kosmetische produkte');
			$('.lang_product_op').text('Sortiert nach');
			$('.lang_product_price1').text('höherer preis');
			$('.lang_product_price2').text('weniger preis');
			$('.lang_product_p').text('preis');
			$('.lang_contact_lo').text('Lage');
			$('.lang_contact_con').text('Sprechen Sie uns an');
			$('.lang_contact_env').attr("value", "Senden");
			$('.lang_contact_nom').attr("placeholder", "Name");
			$('.btn_carrito').text("In den Warenkorb");
			$('.btn_shop').text("Kaufen Sie jetzt");
			$('.lang_contact_inf').text("Produktinformationen");
			$('.one_product_com').html("<b>Käufermeinungen</b>");
			
			$('.log_out').val("Ausloggen");
			$('.log_in').val("Einloggen");
			
			$('.btn_mm').text("mehr anzeigen");
			
		}else if(lenguage == 'espanol'){
			/*
			$('.barra_menu a:nth-child(2) span').text('Inicio');
	  		$('.barra_menu a:nth-child(3) span').text('Productos');
			$('.barra_menu a:nth-child(4) span').text('Materias Primas');
			$('.barra_menu a:nth-child(5) span').text('Cómo lo hacemos?');
			$('.pie_pagina a:nth-child(1) span').text('¿Quiénes somos?');
			$('.pie_pagina a:nth-child(2) span').text('Colaboradores');
			$('.pie_pagina a:nth-child(3) span').text('Proyect0 CEZ');
			$('.pie_pagina a:nth-child(4) span').text('Contacto');
			*/
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