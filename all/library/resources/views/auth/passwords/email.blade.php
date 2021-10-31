@extends('layouts.app')

@section('pageTitle', 'Réinitialiser le mot de passe')

@section('content')
<section>

<div class="container">
		<div class="card login-card">
			<div class="row no-gutters">
				<div class="col-md-5">
					<img src="{{asset('assets/images/login.jpg')}}" alt="login" class="login-card-img">
				</div>
				<div class="col-md-7">
					<div class="card-body">
						<div class="row px-3 mb-4" style="justify-content: space-around;">
							<div class="line">
							</div>
							<small class="or text-center">
								<p class="login-card-description">
									Réinitialiser
								</p>
							</small>
							<div class="line">
							</div>
						</div>
						<p class="login-card-footer-text">
							Les pyramides d'Egypte sont les plus anciennes bibliothèques du genre humain ...
						</p>
						
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						<form method="POST" action="{{ route('password.email') }}">
							@csrf

							<div class="">
								<label for="email" class="mb-1"><h6 class="mb-0 text-sm">{{ __('Lang.E-Mail Address') }}</h6></label>

								<div class="">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
							
							<label class="mb-1 row" style="margin:20px;">
								<button type="submit" class="btn btn-primary btn-sm">
									{{ __('Lang.Send Password Reset Link') }}
								</button>

								@if (Route::has('password.request'))
									<a class="btn btn-link" href="{{ route('password.request') }}">
										<h6 class="mb-0 text-sm"></h6>
									</a>
								@endif
							</label>
						</form>
						
						<p class="login-card-footer-text">
							Vous n'avez pas de compte ?
							<a href="{{ route('register') }}" class="text-reset">Inscrivez-vous ici</a>
						</p>
						<nav class="login-card-footer-nav">
							<a href="/conditions-generales-dutilisation">Conditions d'utilisation.</a>
							<a href="/politique-de-confidentialite">Politique de confidentialité</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection

