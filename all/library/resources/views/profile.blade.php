@extends('layouts.app') 

@section('pageTitle', 'Profil') 

@section('content')
<section class="" style="margin-top:-20px">
	<div class="row-fluid-wrapper row-depth-1 row-number-2 ">
		<div class="row-fluid ">
			<div class="span12 widget-span widget-type-widget_container " data-w="12" data-widget-type="widget_container" data-x="0" style="">
				<div class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" data-hs-cos-general-type="widget" data-hs-cos-type="module" id="hs_cos_wrapper_widget_1616529550031" style="">
					<section class="hsg-page-header" data-background="light" data-image-frame="background">
						<div class="hsg-page-header__bg-image hsg-page-header__bg--desktop" style="background-image: url('{{ asset('assets/img/contact/collection.jpg') }}'">
							&nbsp;
						</div>
						<div class="hsg-page-header__container">
							<div class="hsg-page-header__content">
								<div class="hsg-page-header__text">
									<h1 style="line-height: 15px;" class="hsg-page-header__heading">
										<span style="font-size: 16px" class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container"
										id="hs_cos_wrapper_module_153737270786195" style="">
											Mon Profil - I.M.E
										</span>
									</h1>
									<p>
										<span class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195"
										style="font-size: 14px;">
											“Une bibliothèque, c'est le carrefour de tous les rêves de l'humanité.”
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
	<div class="container rounded bg-white mt-5 mb-5">
		
		@if (\Session::has('success'))
			<div class="alert alert-success" style="margin: auto;line-height: 10px;">
				<ul style="margin-bottom: 0px;">
					<li>{!! \Session::get('success') !!}</li>
				</ul>
			</div>
		@endif
		
		@if (\Session::has('errors'))
			<div class="alert alert-danger" style="margin: auto;line-height: 10px;">
				<ul style="margin-bottom: 0px;">
					<li>{!! \Session::get('errors') !!}</li>
				</ul>
			</div>
		@endif
		
		<form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-3 border-right">
					<div class="d-flex flex-column align-items-center text-center p-3 py-5">
						
						<span style="font-size:14px;font-style:italic;font-weight:normal;display: block;color: slategrey;">Utiliser une photo au format PNG ou JPG</span>
						
						@if (isset($contactMember->photo))
							<img class="profile-pic rounded-circle mt-5" width="150px" src="{{ $contactMember->photo }}">
						@else
							<img class="profile-pic rounded-circle mt-5" width="150px" src="{{ asset('assets/images/user.png') }}">
						@endif
						<div>
							<label for="member-profile-photo">Changer ma photo de profil</label>
							
							<input style="display: none;" id="member-profile-photo" name="member_profile_photo" type="file" value="">
							<br>
							<div>
								<button style="padding: 0px; margin-top: -35px; margin-bottom: -20px;" id="import-pr-photo" class="btn rounded dark" type="button"><i class="fas fa-camera"></i> Importer une photo</button>
							</div>
						</div>
						
						<div class="divider" style="margin: 10px 0px;"></div>
						
						<span class="font-weight-bold">
							{{ $member->name }} {{ $member->lastname }}
						</span>
						<span class="text-black-50">
							{{ $member->email }}
						</span>
						<span>
						</span>
					</div>
				</div>
				<div class="col-md-5 border-right">
					<div class="p-3 py-5">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h4 class="text-right">
								Paramètres de profil
							</h4>
						</div>
						<div class="row mt-2">
							
							<div class="col-md-12">
								<label>Titre <span class="red">*</span></label>
								<select style="margin-bottom: 10px;" name="titre" class="form-control @error('titre') is-invalid @enderror" id="titre">
									<option value="Docteur" @if($contactMember->titre == 'Docteur') selected @endif>Docteur</option>
									<option value="Madame" @if($contactMember->titre == 'Madame') selected @endif>Madame</option>
									<option value="Monsieur" @if($contactMember->titre == 'Monsieur') selected @endif>Monsieur</option>
									<option value="Professeur" @if($contactMember->titre == 'Professeur') selected @endif>Professeur</option>
									<option value="Maître" @if($contactMember->titre == 'Maître') selected @endif>Maître</option>
								</select>
								@error('titre')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
							
							<div class="col-md-6">
								<label class="labels">
									Prénom(s) <span class="red">*</span>
								</label>
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" @if(!empty(old( 'Name', session()->get('register-member.name')))) value="{{ old('name', session()->get('register-member.name')) }}" @else value= "{{ $member->name }}" @endif autocomplete="name"> 
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-6">
								<label class="labels">
									Nom <span class="red">*</span>
								</label>
								<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" @if(!empty(old( 'lastname', session()->get('register-member.lastname')))) value="{{ old('lastname', session()->get('register-member.lastname')) }}" @else value= "{{ $member->lastname }}" @endif autocomplete="lastname"> 
								@error('lastname')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<label class="labels">
									Numéro de portable <span class="red"> *</span>
								</label>
								<input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" @if(!empty(old( 'mobile', session()->get('register-member.mobile')))) value="{{ old('mobile', session()->get('register-member.mobile')) }}" @else value= "{{ $contactMember->mobile }}" @endif autocomplete="mobile"> 
								@error('mobile')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-12">
								<label class="labels">
									Adresse 
								</label>
								<input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" @if(!empty(old( 'adresse', session()->get('register-member.adresse')))) value="{{ old('adresse', session()->get('register-member.adresse')) }}" @else value= "{{ $contactMember->adresse }}" @endif autocomplete="adresse"> 
								@error('adresse')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
							<!--div class="col-md-12">
								<label class="labels">
									Complement d'adresse
								</label>
								<input id="complement_adresse" type="text" class="form-control @error('complement_adresse') is-invalid @enderror" name="complement_adresse" @if(!empty(old( 'complement_adresse', session()->get('register-member.complement_adresse')))) value="{{ old('complement_adresse', session()->get('register-member.complement_adresse')) }}" @else value= "{{ $member->complement_adresse }}" @endif autocomplete="complement_adresse">
								@error('complement_adresse')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div-->
							<div class="col-md-12">
								<label class="labels">
									Code postal
								</label>
								<input id="code_postal" type="text" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" @if(!empty(old( 'code_postal', session()->get('register-member.code_postal')))) value="{{ old('code_postal', session()->get('register-member.code_postal')) }}" @else value= "{{ $member->code_postal }}" @endif autocomplete="code_postal"> 
								@error('code_postal')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-12">
								<label class="labels">
									Ville
								</label>
								<input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" @if(!empty(old( 'city', session()->get('register-member.city')))) value="{{ old('city', session()->get('register-member.city')) }}" @else value= "{{ $contactMember->ville }}" @endif autocomplete="city"> 
								@error('city')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-6">
								<label class="labels">
									Pays
								</label>
								<input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" @if(!empty(old( 'country', session()->get('register-member.country')))) value="{{ old('country', session()->get('register-member.country')) }}" @else value= "{{ $contactMember->pays }}" @endif autocomplete="country"> 
								@error('country')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-6">
								<label class="labels">
									Nationalité
								</label>
								<input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" @if(!empty(old( 'nationality', session()->get('register-member.nationality')))) value="{{ old('nationality', session()->get('register-member.nationality')) }}" @else value= "{{ $contactMember->nationality }}" @endif autocomplete="nationality"> 
								@error('nationality')
								<span class="invalid-feedback" role="alert">
									<strong>
										{{ $message }}
									</strong>
								</span>
								@enderror
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="p-3 py-5">
						<div class="col-md-12">
							<label class="labels">
								Poste actuel
							</label>
							<input id="poste" type="text" class="form-control @error('poste') is-invalid @enderror" name="poste" @if(!empty(old( 'poste', session()->get('register-member.poste')))) value="{{ old('poste', session()->get('register-member.poste')) }}" @else value= "{{ $contactMember->job }}" @endif autocomplete="poste"> 
							@error('poste')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label class="labels">
								Entreprise
							</label>
							<input id="entreprise" type="text" class="form-control @error('entreprise') is-invalid @enderror" name="entreprise" @if(!empty(old( 'entreprise', session()->get('register-member.entreprise')))) value="{{ old('entreprise', session()->get('register-member.entreprise')) }}" @else value= "{{ $contactMember->entreprise }}" @endif autocomplete="entreprise"> 
							@error('entreprise')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label>Employeur</label>
							<select style="margin-bottom: 10px;"  name="employer" id="employer"  class="form-control @error('titre') is-invalid @enderror">
								<option value="" selected=""></option>
								<option value="Etat" @if($contactMember->employer == 'Etat') selected @endif>Etat</option>
								<option value="Privé" @if($contactMember->employer == 'Privé') selected @endif>Privé</option>
								<option value="ONG" @if($contactMember->employer == 'ONG') selected @endif>ONG</option>
								<option value="Consultant" @if($contactMember->employer == 'Consultant') selected @endif>Consultant</option>
								<option value="Autres" @if($contactMember->employer == 'Autres') selected @endif>Autres</option>
							</select>
							@error('employer')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label class="labels">
								Domaines
							</label>
							<input id="domaines" type="text" class="form-control @error('domaines') is-invalid @enderror" name="domaines" @if(!empty(old( 'domaines', session()->get('register-member.domaines')))) value="{{ old('domaines', session()->get('register-member.domaines')) }}" @else value= "{{ $contactMember->domaines }}" @endif autocomplete="domaines"> 
							@error('domaines')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="form-group col-md-12">
							<label>Formation</label>
							<select style="margin-bottom: 10px;"  name="formation" id="formation" class="form-control @error('formation') is-invalid @enderror">
								<option value="">-</option>
								<option value="Enseignant" @if($contactMember->formation == 'Enseignant') selected @endif>Enseignant</option>
								<option value="Doctorat" @if($contactMember->formation == 'Doctorat') selected @endif>Doctorat</option>
								<option value="Master" @if($contactMember->formation == 'Master') selected @endif>Master</option>
								<option value="Licence" @if($contactMember->formation == 'Licence') selected @endif>Licence</option>
								<option value="Autres" @if($contactMember->formation == 'Autres') selected @endif>Autres</option>
							</select>
							@error('formation')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label class="labels">
								Promotion
							</label>
							<input id="promotion" type="number" class="form-control @error('promotion') is-invalid @enderror" name="promotion" @if(!empty(old( 'promotion', session()->get('register-member.promotion')))) value="{{ old('promotion', session()->get('register-member.promotion')) }}" @else value= "{{ $contactMember->promotion }}" @endif autocomplete="promotion"> 
							@error('promotion')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label class="labels">
								Facebook
							</label>
							<input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" @if(!empty(old( 'facebook', session()->get('register-member.facebook')))) value="{{ old('facebook', session()->get('register-member.facebook')) }}" @else value= "{{ $contactMember->facebook }}" @endif autocomplete="facebook"> 
							@error('facebook')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label class="labels">
								Twitter
							</label>
							<input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" @if(!empty(old( 'twitter', session()->get('register-member.twitter')))) value="{{ old('twitter', session()->get('register-member.twitter')) }}" @else value= "{{ $contactMember->twitter }}" @endif autocomplete="twitter"> 
							@error('twitter')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="col-md-12">
							<label class="labels">
								Site Web
							</label>
							<input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" @if(!empty(old( 'website', session()->get('register-member.website')))) value="{{ old('website', session()->get('register-member.website')) }}" @else value= "{{ $contactMember->siteweb }}" @endif autocomplete="website"> 
							@error('website')
							<span class="invalid-feedback" role="alert">
								<strong>
									{{ $message }}
								</strong>
							</span>
							@enderror
						</div>
						
						<div class="form-group col-md-12">
							<label>Notes</label>
							<textarea name="notes" class="form-control">{{ $contactMember->notes }}</textarea>
						</div>
						
						<div style="margin-top: 25px;">
							<div class="">
								<div class="form-check">
									<!--input class="form-check-input" type="checkbox" name="share" id="share" {{ old( 'share') ? 'checked' : '' }}-->
									 <input class="form-check-input" type="checkbox" name='share' @if($member->share) checked @endif value = {{ old('share',$member->share) }} />
									<label class="mb-1" for="share">
										<h6 class="mb-0 text-sm">
											Acceptez-vous de partager vos informations de contact pour les autres membres ?
										</h6>
									</label>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="mt-5 text-center">
				<input class="btn btn-primary profile-button" type="submit" value="Enregistrer mon profil">
			</div>		
		</form>
	</div>
</section>
<script type="text/javascript">
	let importPhoto = document.querySelector('#import-pr-photo')
	importPhoto.addEventListener('click', function(e) {
		let t = e.currentTarget
			document.querySelector('#member-profile-photo').click()
	})
	
	// When choosing to change profile picture
	let chooseImg = document.querySelector('#member-profile-photo')
	if (chooseImg) {
		chooseImg.addEventListener('change', function(e) {
			if (e.currentTarget.files.length) {
				let url = URL.createObjectURL(e.currentTarget.files[0])
				document.querySelector('.profile-pic').src = url
			}
		})
	}
</script>
@endsection