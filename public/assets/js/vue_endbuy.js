				 
window.onload = function() { 
	
	Vue.component('buy', {
	 props: ['name', 'surname','dni','born', 'postal_code', 'email','phone','credit_card' ],
	 template:  

			`<form>
				<label>{{name}}</label>
				<br>
				<input type="text" name="username" placeholder="Username">
				<p style="display:none">El campo nombre no puede estar vacío</p>
				<br>
				<label>{{surname}}</label>
				<br>
				<input type="text" name="surname" placeholder="Surname">
				<p style="display:none">El campo apellidos no puede estar vacío</p>
				<br>
				<label>{{dni}} </label>
				<br>
				<input type="text" name="id_card_name" placeholder="Id card name">
				<p style="display:none">Must contain 9 numbers and one letter</p>
				<br>
				<label>{{born}}</label>
				<br>
				<input type="text" name="date_of_bird" placeholder="Date of bird">
				<p style="display:none">Format must be: dd/mm/yyyy</p>
				<br>
				<label>{{postal_code}}</label>
				<br>
				<input type="text" name="postal_code" placeholder="Postal Code">
				<p style="display:none">The first two numbers must not exceed numeber 52. Example: 35500 </p>
				<br>
				<label>{{email}}</label>
				<br>
				<input type="text" name="email" placeholder="Email">
				<p style="display:none">Example: mail@mail.com</p>
				<br>
				<label>{{phone}} </label><br>
				<input type="text" name="telephone" placeholder="Telephone">
				<p style="display:none">8XXXXXXXX or 9XXXXXXXX</p>
				<br>


				<label>{{credit_card}}</label><br>
				<input type="text" name="credit_card" placeholder="Credit Card">
				<p style="display:none">Example: 1234 1234 1234 1234</p>
				<br>`
	});


	new Vue({
	 	el: '#app_endbuy',
		data: {
			nombre: 'nombre',
		}
	});
	
	
	
};//end onload
					 