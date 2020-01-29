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
	

	$('.order_products').change(function(){
		var value = $('.order_products option:selected').val();
		console.log(value);
		$.ajax({
			url: "/orderproducts/"+value,
			success: function(respuesta) {
				$('.section').html(respuesta);
			} //fin succces
		}); //end ajax
	});//end click

	/*
	$('.order_products').on('change',function() {
		//var value = $('.order_products option:selected').text();
		var value = $('.order_products').val();
		$.ajax({
			url: "/orderproducts/"+value,
			
			success: function(respuesta) {
			
				
				$('.section').html(respuesta);
				
				
			} //fin succces
		}); //end ajax
		
		
	}); //end change
	*/
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