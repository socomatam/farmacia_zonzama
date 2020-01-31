@extends('layouts.auth') @section('content')
<div class="login_container">
	

	<div class="card-body">
		<div> <span>Entrar</span></div>
		<form method="POST" action="{{ route('login') }}">
			@csrf

			<div class="form-group row">
				<label for="email" class="login_label">{{ __('E-Mail Address') }}</label>

				<div class="login_input">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="password" class="login_label">{{ __('Password') }}</label>

				<div class="login_input">
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-6 offset-md-4">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

						<label class="form-check-label" for="remember">
							{{ __('Remember Me') }}
						</label>
					</div>
				</div>
			</div>

			<div class="form-group row mb-0">
				<div class="login_btns">
					<button type="submit" class="btn btn-primary">
						{{ __('Login') }}
					</button>

					@if (Route::has('password.request'))
					<button id="forgot_pass">
						<a class="btn btn-link" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
					</button>	
					@endif
				</div>
			</div>
		</form>
	</div>
	
	<div class="login_register">
		
		<span>¿Nuevo cliente?</span>
		<br><br><br><br>
		<button>
			
			<a href="{{url('/register')}}">Registrase</a>
			
		</button>
	</div>
</div>

@endsection