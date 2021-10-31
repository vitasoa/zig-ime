@extends('layouts.app') @section('pageTitle', 'S\'enregistrer') @section('content')
<section>
	<div class="container">
		<div class="card login-card">
			<div class="row no-gutters">
				<div class="col-md-5">
					<img src="assets/images/login.jpg" alt="login" class="login-card-img">
				</div>
				<div class="col-md-7">
					<div class="card-body">
						<div class="row px-3 mb-4" style="justify-content: space-around;">
							<div class="line">
							</div>
							<small class="or text-center">
								<p class="login-card-description">
									S'enregistrer
								</p>
							</small>
							<div class="line">
							</div>
						</div>
						<p class="login-card-footer-text">
							Une bibliothèque, c'est le carrefour de tous les rêves de l'humanité ...
						</p>
						<form method="POST" action="{{ route('register') }}">
							@csrf
							
							<div class="">
								<label for="genre" class="mb-1">
									<h6 class="mb-0 text-sm">
										Genre <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="genre" id="genre" value="male" required >
										<label class="form-check-label" for="inlineRadio1">Monsieur</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="genre" id="genre" value="female">
										<label class="form-check-label" for="inlineRadio2">Madame</label>
									</div>
									
									@error('genre')
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $message }}
										</strong>
									</span>
									@enderror
								</div>
							</div>	
							<br/>
							
							<div class="">
								<label for="name" class="mb-1">
									<h6 class="mb-0 text-sm">
										{{ __('Lang.Name Member') }} <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $message }}
										</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="">
								<label for="lastname" class="mb-1">
									<h6 class="mb-0 text-sm">
										{{ __('Lang.Lastname Member') }} <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
									@error('lastname')
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $message }}
										</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="">
								<label for="email" class="mb-1">
									<h6 class="mb-0 text-sm">
										{{ __('Lang.E-Mail Address') }} <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $message }}
										</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="">
								<label for="password" class="mb-1">
									<h6 class="mb-0 text-sm">
										{{ __('Lang.Password') }} <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $message }}
										</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="">
								<label for="password-confirm" class="mb-1">
									<h6 class="mb-0 text-sm">
										{{ __('Lang.Confirm Password') }} <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>
							<div class="">
								<label for="formation" class="mb-1">
									<h6 class="mb-0 text-sm">
										{{ __('Niveau') }} <span style="color: red">*</span>
									</h6>
								</label>
								<div class="">
									<select id="formation" name="formation" class="custom-select @error('formation') is-invalid @enderror">
										<option value="">
											Sélectionner un niveau
										</option>
										<option value="Licence">
											Licence
										</option>
										<option value="Master">
											Master
										</option>
										<option value="Doctorat">
											Doctorat
										</option>
										<option value="Enseignant">
											Enseignant
										</option>
										<option value="Autres">
											Autres
										</option>
									</select>
									@error('formation')
									<span class="invalid-feedback" role="alert">
										<strong>
											{{ $message }}
										</strong>
									</span>
									@enderror
								</div>
							</div>
							<div style="margin-top: 25px;">
								<div class="">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="share" id="share" {{ old( 'share') ? 'checked' : '' }}>
										<label class="mb-1" for="share">
											<h6 class="mb-0 text-sm">
												Acceptez-vous de partager vos informations de contact pour les autres membres ?
											</h6>
										</label>
									</div>
								</div>
							</div>
							<label class="mb-1 row" style="margin:20px;">
								<button type="submit" class="btn btn-primary btn-sm">
									{{ __('Lang.Register') }}
								</button>
								@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
								<h6 class="mb-0 text-sm"></h6>
								</a>
								@endif
							</label>
						</form>
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