@extends('layouts.app')

@section('pageTitle', 'Dashboard')

@section('content')
<section style="margin-top: -20px;">
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
										{{ Auth::user()->lastname }} {{ Auth::user()->name }} - I.M.E
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
	
	<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5">
				
		<div class="container">
			<section class="row" style="margin: 20px;">
				<h3 class="collection-user"> <i class="fa fa-eye" aria-hidden="true"></i> Vous avez regardé les collections suivantes</h3>
				<div class="wrapper mt-3">
					<ul class="list list-inline">
					@foreach($collection_users_viewed as $viewed)
						<li class="row">
							<div class="col"><i class="fa fa-check-circle checkicon"></i>
								<div class="ml-2" style="display: inline-grid;">
									<h6 class="mb-0" style="font-size: 16px;"><a href="{{ route('collection.detail', ['id' =>  $viewed['id']]) }}">{{ $viewed['name'] }}</a></h6>
									<div class="d-flex flex-row mt-1 text-black-50 date-time">
										<div><i class="fa fa-calendar-o"></i><span class="ml-2">{{ date('d-m-Y', strtotime($viewed['created_at'])) }}</span></div>
										<div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">{{ date('H:i:s', strtotime($viewed['created_at'])) }}</span></div>
									</div>
								</div>
							</div>
							<div class="col" style="text-align: end;">
								<div class="d-flex flex-column mr-2">
									<div class="profile-image">
										@foreach($viewed['authors'] as $a)
										<img class="rounded-circle" src="{{ $a->profile_photo }}" width="30">
										@endforeach()
									</div>
								</div> <i class="fa fa-ellipsis-h"></i>
							</div>
						</li>
					@endforeach
					</ul>
					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button style="background: #00537b;" id="next" class="btn btn-primary btn-sm" type="button">Voir plus >></button>
					</div>
				</div>
			
			</section>
			
			<section class="row" style="margin: 20px;">
				<h3 class="collection-user"> <i class="fas fa-download"></i> Vous avez téléchargé les collections suivantes</h3>
				<div class="wrapper mt-3">
					<ul class="listd list-inline">
					@foreach($collection_download_user as $downed)
						<li class="row">
							<div class="col"><i class="fa fa-check-circle checkicon"></i>
								<div class="ml-2" style="display: inline-grid;">
									<h6 class="mb-0" style="font-size: 16px;"><a href="{{ route('collection.detail', ['id' =>  $downed['id']]) }}">{{ $downed['name'] }}</a></h6>
									<div class="d-flex flex-row mt-1 text-black-50 date-time">
										<div><i class="fa fa-calendar-o"></i><span class="ml-2">{{ date('d-m-Y', strtotime($downed['created_at'])) }}</span></div>
										<div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">{{ date('H:i:s', strtotime($downed['created_at'])) }}</span></div>
									</div>
								</div>
							</div>
							<div class="col" style="text-align: end;">
								<div class="d-flex flex-column mr-2">
									<div class="profile-image">
										@foreach($downed['authors'] as $a)
										<img class="rounded-circle" src="{{ $a->profile_photo }}" width="30">
										@endforeach()
									</div>
								</div> <i class="fa fa-ellipsis-h"></i>
							</div>
						</li>
					@endforeach
					</ul>
					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button style="background: #00537b;" id="nextd" class="btn btn-primary btn-sm" type="button">Voir plus >></button>
					</div>
				</div>
			
			</section>
			
		</div>
	</div>
	
</section>

<script>
$(document).ready(function(){
      var list = $(".list li");
      var numToShow = 5;
      var button = $("#next");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });
	  
	  /** Down **/
	  var listd = $(".listd li");
      var numToShowd = 5;
      var buttond = $("#nextd");
      var numInListd = listd.length;
      listd.hide();
      if (numInListd > numToShowd) {
        buttond.show();
      }
      listd.slice(0, numToShowd).show();

      buttond.click(function(){
          var showingd = listd.filter(':visible').length;
          listd.slice(showingd - 1, showingd + numToShowd).fadeIn();
          var nowShowingd = listd.filter(':visible').length;
          if (nowShowingd >= numInListd) {
            buttond.hide();
          }
      });
});
</script>

@endsection
