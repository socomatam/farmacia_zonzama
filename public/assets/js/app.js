$(document).ready(function() {
	
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
				var result = $('.section').append(response).find('.section').html();	
				$('.section').html(result);
			} //fin succces
		}); //end ajax
	});//end click
	
	
	$('.filter input').change(function(){
		var value = $('.filter input').val();
		
		$.ajax({
			url: "/orderproductsbyprice/"+value,
			success: function(response) {
				console.log(response);
				var result = $('.section').append(response).find('.section').html();	
				$('.section').html(result);
			} //fin succces
		}); //end ajax
		
	});//end click
	

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
	
	
	//
	$('.btn_carrito').click(function(){
	 	var value = $('.id_product').text();
		alert(value);
		
		$.ajax({
			url: "/addtocar/"+value,
			success: function(response) {
				
				
			} //fin succces
		}); //end ajax
	});//end click
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

}); //end jquery