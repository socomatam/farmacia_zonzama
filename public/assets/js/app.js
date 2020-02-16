$(document).ready(function() {
	
	
	setIdUser();
	
	function setIdUser(){
		var id = $('.id_register').text();
		
		localStorage.setItem('id_user', id);
	}
	
	
	//recoje el valor del local estoraje para el id del usuario 
	var  car_user_id =  $('#car_user_id').text();
	//localStorage.setItem('id_user', car_user_id );
	
	$('#btn_login').click(function(){
		var login_email = $('#email').val();
		
		$.ajax({
			method: 'GET',
			url: '/getuserid',
			data: {
				login_email: login_email,
			},
			success: function(response) {
				var id =0;
				for(key in response){
					
					id = response[key];
				}
				
				localStorage.setItem('id_user', id);
				
				
				
			} //fin succces
		}); //end ajax
		
	});
	

	
	
	$('.carrito_enpty').click(function(){
	

		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}//fin config toars
		
		var lenguage = sessionStorage.getItem('lenguage');
				
		if(lenguage == "espanol"){
			Command: toastr["info"]("Debe estar registrado antes de acceder a la canasta.", "Información");
		}else if(lenguage == "english"){
			Command: toastr["info"]("You must be registered before accessing the basket.", "Information");
		}else if(lenguage == "deutsch" ){
			Command: toastr["info"]("Sie müssen registriert sein, bevor Sie auf den Warenkorb zugreifen können.", "Informationen");
		}else{
			Command: toastr["info"]("Debe estar registrado antes de acceder a la canasta.", "Información");
		}//end else

	});//end click
	
	//order all products by price
	$('.order_products').change(function() {
		var value = $('.order_products option:selected').val();
		$.ajax({
			url: '/orderproducts/' + value,
			success: function(response) {
				var result = $('.section')
					.append(response)
					.find('.section')
					.html();
				$('.section').html(result);
			} //fin succces
		}); //end ajax
	}); //end click

	$('.filter input').change(function() {
		var value = $('.filter input').val();

		$.ajax({
			url: '/orderproductsbyprice/' + value,
			success: function(response) {
				console.log(response);
				var result = $('.section')
					.append(response)
					.find('.section')
					.html();
				$('.section').html(result);
			} //fin succces
		}); //end ajax
	}); //end click

	//Send an email
	$('.form_contact input[type="submit"]').click(function(event) {
		event.preventDefault();

		var contact = $('.form_contact input:nth-child(1)').val();
		var email = $('.form_contact input:nth-child(2)').val();

		var mensaje = 'd';

		$.ajax({
			method: 'POST',
			url: '/farmacia/email',
			data: {
				email: email,
				contact: contact,
				mensaje: mensaje
			},

			success: function() {} //fin succces
		}); //fin ajax
	}); //end click

	//añade artículos al carrito junto con el id del usuari logeado
	$('.btn_carrito').click(function() {
	
		
			
		var value = $('.id_product').text();
		
		var user = localStorage.getItem('id_user');

		$.ajax({
			method: 'GET',
			url: '/addtocar',
			data:{
				value: value,
				user: user,
			},
			success: function(response) {
				
				toastr.options = {
					closeButton: false,
					debug: false,
					newestOnTop: false,
					progressBar: false,
					positionClass: 'toast-top-right',
					preventDuplicates: false,
					onclick: null,
					showDuration: '300',
					hideDuration: '1000',
					timeOut: '5000',
					extendedTimeOut: '1000',
					showEasing: 'swing',
					hideEasing: 'linear',
					showMethod: 'fadeIn',
					hideMethod: 'fadeOut'
				};
				
				var lenguage = sessionStorage.getItem('lenguage');
				
				if(lenguage == "espanol"){
				    Command: toastr['success']('Añadido '+ response['nombre_es'] +' al carrito', 'Carrito');
				 }else if(lenguage == "english"){
				 	Command: toastr['success']('Added '+ response['nombre_es'] +' al carrito', 'Carrito');
				 }else if(lenguage == "deutsch" ){
						Command: toastr['success']('sdfdsfsd '+ response['nombre_es'] +' al carrito', 'Carrito');
				 }else{
					 Command: toastr['success']('sdfdsfsd '+ response['nombre_es'] +' al carrito', 'Carrito');
				 }//end else
				//toCart();
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    
				if(errorThrown == 'Unauthorized'){
					
					toastr.options = {
					  "closeButton": false,
					  "debug": false,
					  "newestOnTop": false,
					  "progressBar": false,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": false,
					  "onclick": null,
					  "showDuration": "300",
					  "hideDuration": "1000",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut"
					}//fin config toars
					
					Command: toastr["info"]("Debe estar registrado antes de añadir artículos a la canasta.", "Información");
  
				}//end if
            }  //end error
		}); //end ajax
		

	}); //end click
	
	function toCart(){
			$("#click").submit();
		
		//$('#click').trigger('click');
	}//end to cart
    
	$('.btn_buy_now').click(function(){
		
			
		var value = $('.id_product').text();
		
		var user = localStorage.getItem('id_user');

		$.ajax({
			method: 'GET',
			url: '/addtocar',
			data:{
				value: value,
				user: user,
			},
			success: function(response) {
				$("#click").submit();
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) { 
              
            }  //end error
		}); //end ajax
		
		
		
	});
	
	
	
}); //end jquery