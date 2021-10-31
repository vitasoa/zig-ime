@extends('layouts.app') 

@section('pageTitle', 'Détail de la collection')

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
										<span style="font-size: 16px" class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195" style="">
										{{ Str::limit($first->name, 40, ' ...') }} - I.M.E
										</span>
									</h1>
									<p>
										<span class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195" style="font-size: 14px;">
											Si vous possédez une bibliothèque et un jardin, vous avez tout ce qu'il vous faut ...
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
	
	<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-6">
				
		<div class="container">
			<section class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						@if (!$first->image)
							<div style="height: 300px;" class="collection-div">No Image</div>
						@else
							<img src="{{ asset($first->image) }}" alt="Ebook img" style="height: 300px;">
						@endif
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1 style="line-height: 20px; font-size: 20px; word-break: break-all;">{{ $first->name }}</h1>
						<p style="line-height: 20px; font-size: 14px;">{{ $first->commentary }}</p>
						<!--a style="line-height: 20px; font-size: 14px;" href="{{ asset('storage/' . $first->book_file) }}" target="_blank" class="mu-primary-btn">Download Now!</a-->
						<i class="fas fa-download"></i> <a class="ml-2" href="{{ route('download.ebook', ['id' => app('encrypter')->encrypt($first->id)]) }}" title="Download PDF">Télécharger maintenant !</a>
						<span style="line-height: 20px; font-size: 14px;"> (* Disponible en ligne)</span>
					</div>
					
					<div style="padding: 2px;">
						<strong style="line-height: 20px; font-size: 13px;">ISBN - </strong><span>{{ $first->isbn }}</span>
					</div>
					
					<div style="padding: 2px;">
						<strong style="line-height: 20px; font-size: 13px;">Total Page - </strong><span>{{ $first->total_page }} pages</span>
					</div>
					
					<div style="padding: 2px;">
						<strong style="line-height: 20px; font-size: 13px;">Language - </strong><span>{{ $first->lang }}</span>
					</div>
					
					<div style="padding: 2px;">
						<strong style="line-height: 20px; font-size: 13px;">Date de publication - </strong><span>{{ date('d-m-Y', strtotime($first->published_date)) }}</span>
					</div>
				</div>	
			</section>
			
			<section id="mu-book-overview">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-book-overview-area">

								<div class="mu-heading-area">
									<h2 class="mu-heading-title" style="line-height: 20px; font-size: 13px;">Topics - KeyWords</h2>
									<span class="mu-header-dot"></span>
									<!--p style="line-height: 20px; font-size: 13px;">
										<strong style="line-height: 20px; font-size: 13px;">Topics - </strong>
										{{ $first->topic }}, 
										@foreach($first->themes as $t)
											{{ $t->name }}, 
										@endforeach
										 ...
									</p-->
								</div>

								<!-- Start Book Overview Content -->
								<div class="mu-book-overview-content">
									<div class="row">

										@foreach($first->keywords as $k)
										<div class="col-md-3 col-sm-6">
											<div class="mu-book-overview-single">
												<span class="mu-book-overview-icon-box">
													<i class="fas fa-key" aria-hidden="true"></i>
												</span>
												<h4 style="line-height: 20px; font-size: 13px;">{{ $k->name }}</h4>
												<p></p>
											</div>
										</div>
										@endforeach

									</div>
								</div>
								<!-- End Book Overview Content -->

							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="mu-author">
				<div class="container">
					<div class="row" style="    padding-top: 20px;">
						<div class="col-md-12">
							
								<div class="mu-heading-area">
									<h2 class="mu-heading-title" style="line-height: 20px; font-size: 13px;">A propos de(s) auteur(s)</h2>
									<span class="mu-header-dot"></span>
								</div>
								
							<div class="mu-author-area" style="display: inline-flex; flex-wrap: nowrap;">


								@foreach($first->authors as $a)
								<div class="mu-author-content">
										<div class="">
											<div class="mu-author-image">
												<img src="{{ $a->profile_photo }}" alt="Author Image">
											</div>
											<div class="mu-author-info">
												<h3 style="line-height: 20px; font-size: 13px;">{{ $a->lastname }}</h3>
												<p style="line-height: 20px; font-size: 13px;">{{ $a->description }}</p>

												<div class="mu-author-social">
													<a href="#"><i class="fab fa-facebook-f"></i></a>
													<a href="#"><i class="fab fa-linkedin-in"></i></a>
													<a href="#"><i class="fas fa-envelope"></i></a>
												</div>

											</div>
										</div>
								</div>
								@endforeach()
								<!-- End Author Content -->

							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		
	</div>
	
</section>
@endsection