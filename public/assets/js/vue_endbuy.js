window.onload = function() { 

	var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	
	var dniRE = /^[0-9]{8,8}[A-Za-z]$/
	var phoneRE = /^(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}$/
	var fechaRE = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[/\\/](19|20)\d{2}$/
	var cpRE = /^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/
	var creditRE = /^(?:(\d{4}\s?){4}|(\d{4,6}\s?){3})$/

	
	

	var firebaseConfig = {
		apiKey: "AIzaSyD7nujg1YO8DET7Vd3__JH6st6h8goPi0U",
		authDomain: "farmacia-zonzamas.firebaseapp.com",
		databaseURL: "https://farmacia-zonzamas.firebaseio.com",
		projectId: "farmacia-zonzamas",
		storageBucket: "farmacia-zonzamas.appspot.com",
		messagingSenderId: "355497703752",
		appId: "1:355497703752:web:ec4fd850fde5a5e61e1b7d",
		measurementId: "G-QTQ3L4QR1Z"
  	};
 	 // Initialize Firebase
  	firebase.initializeApp(firebaseConfig);
	
	var usersRef = firebase.database().ref('users')

	Vue.component('buy_form', {

		props: ['name' ],

		template: `
		<div id="app">
			<form v-on:submit.prevent="addUser">
				<h3>Introduzca sus datos para efectuar el envío</h3>
				<h4>Datos personales</h4>
				<label>Nombre</label>
				<br>
				<input type="text" v-model="newUser.name" placeholder="Nombre">
				
				<br>

				<label>Apellidos</label>
				<br>
				<input type="text" v-model="newUser.surname" placeholder="Apellidos">
				
				<br>

				<label>DNI</label>
				<br>
				<input type="text" v-model="newUser.dni" placeholder="DNI">
		
				<br>


				<label>Fecha Nacimiento</label>
				<br>
				<input type="text" v-model="newUser.fecha" placeholder="Fecha de nacimiento">
				
				<br>

				<label>Teléfono</label>
				<br>
				<input type="text" v-model="newUser.phone" placeholder="Fecha de nacimiento">
				
				<br>


				<label>Email</label>
				<br>
				<input type="email" v-model="newUser.email" placeholder="email@email.com">
		
				<br>

				<h4>Datos de envío</h4>
				<label>Dirección</label>
				<br>
				<input type="text" v-model="newUser.address" placeholder="Dirección">
		
				<br>

				<label>Ciudad</label>
				<br>
				<input type="text" v-model="newUser.city" placeholder="Ciudad">
			
				<br>

				<label>Código Postal</label>
				<br>
				<input type="text" v-model="newUser.cp" placeholder="Código Postal">
			
				<br>


				<h4>Datos de pago</h4>
				
				<label>Tarjeta de crédito</label>
				<br>
				<input type="text" v-model="newUser.credit" placeholder="arjeta de crédito">
				
				<br>




				<input class="btn__buy" type="submit" value="Comprar">
			</form>

			<div class="errors">
				<ul class="errors">
					<li v-show="!validation.name">El nombre no puede estar vacío.</li>
					<li v-show="!validation.surname">El apellido no puede estar vacío.</li>
					<li v-show="!validation.dni">Introduzca un DNI válido.</li>
					<li v-show="!validation.fecha">Introduzca un formato de fecha válido.</li>
					<li v-show="!validation.phone">Introduzca un teléfono válido.</li>
					<li v-show="!validation.email">Introduzca un email válido.</li>
					<li v-show="!validation.addrees">La dirección no puede estar vacía.</li>
					<li v-show="!validation.city">El campo ciudad no puede estar vacío.</li>
					<li v-show="!validation.cp">Introduzca un código postal válido.</li>
					<li v-show="!validation.credit">Introduzca na tarjeta de c´redito válida.</li>
					
  				</ul>
			</div>

			


		</div>`,

		firebase: {
			 users: usersRef
		},

		computed: {
			validation: function () {
				return {
					name: !!this.newUser.name.trim(),
					surname: !!this.newUser.surname.trim(),
					email: emailRE.test(this.newUser.email),
					dni: dniRE.test(this.newUser.dni),
					fecha: fechaRE.test(this.newUser.fecha),
					phone: phoneRE.test(this.newUser.phone),
					//address: !!this.newUser.address.trim(),
					city: !!this.newUser.city.trim(),
					cp: cpRE.test(this.newUser.cp),
					credit: creditRE.test(this.newUser.credit),
				}//end return
		},

		isValid: function () {
			  var validation = this.validation
			  return Object.keys(validation).every(function (key) {
				return validation[key]
			  })
		}//end is valid

		},
		methods: {
		   addUser: function () {
				if (this.isValid) {
					usersRef.push(this.newUser)
					this.newUser.name = ''
					this.newUser.surname = ''
					this.newUser.email = ''
					this.newUser.dni = ''
					this.newUser.cp = ''
					this.newUser.phone = ''
					this.newUser.city = ''
					this.newUser.credit = ''
					this.newUser.address = ''
					this.newUser.fecha = ''
				}//end if
			},

		},//end methods
		data: function () {
			return {
				newUser: {
					name: '',
					surname: '',
					email: '',
					dni: '',
					cp: '',
					phone: '',
					city: '',
					credit: '',
					address: '',
					fecha: ''

				},

			}//end return
		}
	})

	var app = new Vue({
		el: '#app_endbuy',
		template: `<buy_form></buy_form>`
	});
		
};//end onload