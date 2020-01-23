@extends('layouts.app') @section('content')
<div class="contact">
	<div>
		<h2>Localización</h2>

		<iframe height="250" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1234.140440968978!2d-13.56113070123452!3d28.967324126848492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1579545574599!5m2!1ses!2ses" frameborder="0" allowfullscreen=""></iframe>
		<br>
		<br>
		<i class="fas fa-map-marker-alt"> Dirección</i>
		<br>
		<br>
		<i class="fas fa-envelope"> Correo electrónico</i>
		<br>
		<br>
		<i class="fas fa-phone-square"> Teléfono de contacto</i>

	</div>

	<hr>

	<div>
		<h2>Contáctenos</h2>
		<form>
			<input type="text" name="name" placeholder="Nombre">
			<br>
			<input type="text" name="name" placeholder="Email">
			<br>
			<textarea rows="10" placeholder="Texto"></textarea>
			<br>
			<br>
			<input type="submit" name="send" value="Enviar">

		</form>
	</div>
</div>
@endsection