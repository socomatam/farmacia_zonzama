$(document).ready(function() {
	
	/*
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
	*/
	
	
	$('.carrito').click(function(){
		//$('.carrito').submit();
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

		console.log(contacto);
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

	//
	$('.btn_carrito').click(function() {
		var value = $('.id_product').text();
		

		$.ajax({
			url: '/addtocar/' + value,
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
				 }
				
				
				

			} //fin succces
		}); //end ajax
	}); //end click
}); //end jquery