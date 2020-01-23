@extends('layouts.app') @section('content')

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

<div class="who_we_are_text">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Lorem ipsum dolor sit amet,
	consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Lorem ipsum dolor sit amet, consectetur adipiscing
	elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
</div>
@endsection