@extends('layouts.app')

@section('pageTitle', 'Réinitialiser le mot de passe')

@section('content')
<section>

	<div class="row-fluid-wrapper row-depth-1 row-number-2 ">
		<div class="row-fluid ">
			<div class="span12 widget-span widget-type-widget_container " data-w="12" data-widget-type="widget_container" data-x="0" style="">
				<div class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" data-hs-cos-general-type="widget" data-hs-cos-type="module" id="hs_cos_wrapper_widget_1616529550031" style="">
					<section class="hsg-page-header" data-background="light" data-image-frame="background">
						<div class="hsg-page-header__bg-image hsg-page-header__bg--desktop" style="background-image: url('/assets/img/contact/contact.jpg');">
							&nbsp;
						</div>
						<div class="hsg-page-header__bg-wrapper">
							<div class="hsg-page-header__bg-blob">
								<span class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195" style="">
									<svg class="hsg-page-header__bg--desktop" viewBox="0 0 984 686" xmlns="http://www.w3.org/2000/svg">
										<path class="hsg-page-header__bg-blob--background" d="M829.645582,-3.55271368e-14 C818.959194,11.9356039 808.954818,24.8206121 799.721248,38.7211139 C723.226254,157.53566 739.861725,301.270975 797.809751,426.687474 C804.958442,442.184984 814.61534,462.120894 818.944183,473.423703 C844.673456,540.503061 856.345675,600.855141 881.916718,667.40505 C761.006678,679.138421 646.665221,685.004119 538.890625,685.004119 L0,685.004119 L0,685.004119 L0,0.00411925189 Z">
										</path>
										<path class="hsg-page-header__bg-blob--small" d="M995.765853,690.670383 C1004.18224,698.198908 1010.89512,706.716917 1015.98268,715.998337 L579.456263,715.992134 C583.995701,573.812815 592.889746,520.954152 721.334176,485.511351 C860.208297,447.190586 918.80802,621.831016 995.765853,690.670383 Z">
										</path>
									</svg>
									<svg class="hsg-page-header__bg--mobile" height="370px" viewBox="0 0 399 370" width="399px" xmlns="http://www.w3.org/2000/svg">
										<path class="hsg-page-header__bg-blob--small" d="M357.380517,258.129067 C289.700199,321.205562 123.068973,365.865461 71.2230933,342.491713 C19.3772199,319.117964 -82.3833684,172.316247 62.1998722,119.163231 C206.783094,66.0102193 151.987177,-56.4020257 290.115441,34.2750973 C428.243705,124.952215 425.060835,195.052572 357.380517,258.129067 Z" transform="translate(195.334713, 175.293083) rotate(-15.000000) translate(-195.334713, -175.293083) ">
										</path>
									</svg>
								</span>
							</div>
						</div>
						<div class="hsg-page-header__container">
							<div class="hsg-page-header__content">
								<div class="hsg-page-header__text">
									<h1 class="hsg-page-header__heading">
										<span class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195" style="">
											Réinitialiser le mot de passe ?
										</span>
									</h1>
									<p>
										<span class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195" style="">
											UUne bibliothèque est un hôpital pour l'esprit ...
										</span>
									</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<!--end widget-span -->
		</div>
		<!--end row-->
	</div>
	
	<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
		<div class="card card0 border-0">
			<div class="row d-flex">
				<div class="col-lg-6">
					<div class="card1 pb-5">
						<div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card2 card border-0 px-4 py-5">
						<div class="row px-3 mb-4">
							<div class="line"></div><small class="or text-center">Réinitialiser</small>
							<div class="line"></div>
						</div>
						
						<form method="POST" action="{{ route('password.update') }}">
							@csrf

							<input type="hidden" name="token" value="{{ $token }}">

							<div class="">
								<label for="email" class="mb-1"><h6 class="mb-0 text-sm">{{ __('E-Mail Address') }}</h6></label>

								<div class="">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Reset Password') }}
									</button>
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection

