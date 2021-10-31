@extends('layouts.app') 

@section('pageTitle', 'Collections')

@section('content')

<div class="loading-overlay" id="loading-overlay" style="dispaly:none">
	<div class="loading-overlay-image-container" >
		<img src="{{ asset('assets/img/loading.gif') }}" class="loading-overlay-img"/>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function($) {
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
	function get_collection() {
		$("#loading-overlay").hide();
		$collect1 = $('#collection1').val() ? $('#collection1').val() : '-';
		$collect2 = $('#collection2').val() ? $('#collection2').val() : '-';
		var allQuery = $('#field1').val() + ',' + $('#query1').val() + ',' + $collect1; 
		var allQueryPrecison = $('#option_add').val() + "," + $('#field2').val() + ',' + $('#query2').val() + ',' + $collect2; 
		
        $.ajax({
            url: '/library/getCollections',
            method: 'GET',
            data: {
				searchQuery: allQuery + "," + allQueryPrecison,
				theme: $('#theme').val(),
				lang: $('#lang').val(),
				year: $('#year').val(),
				type: $('#type').val(),
				page_book: $('#page_book').val(),
            },
            beforeSend: function () {
                $("#loading-overlay").show();
            },
            success: function(response){
				if (response) {
					$('#no-result').css('display', "none");
					if (response.length === 0) {
						$('#no-result').css('display', "block");
					}
					$('#nbr_collections').text(response.length + ' Ebook(s)');
					$.each(response, function(i, book) {
						var book_id = book.id;
						var img = book.image;
						var htmlBook = '';
						htmlBook += '<div class="collection-item">';
						htmlBook += '<div style="min-height: 320px" class="p-card p-2 collection-rounded px-3">';
						htmlBook += '<div class="d-flex align-items-center credits">';
						htmlBook += '<i class="fas fa-book"></i>';
						htmlBook += '<span class="text-black-50 ml-2">1 download(s)</span>';
						htmlBook += '</div>';
						
						var myLink = '<a href="{{ route('collection.detail', ['id' =>  'book_id_str']) }}">';
						let newLinkStr = myLink.replace('book_id_str', book_id);
						htmlBook += newLinkStr;
						if (book.image){
							htmlBook += '<img class="collection-img" src="' + img + '"></img>';
						}else{
							htmlBook += '<div class="collection-div">No Image</div>';
						}
						htmlBook += '</a>';
						
						htmlBook += newLinkStr;
						htmlBook += '<h5 class="mt-2">' + book.name + '</h5>';
						htmlBook += '</a>';
						
						htmlBook += '<span class="badge badge-danger py-1 mb-2">';
						htmlBook += book.themes;
						htmlBook += '</span>';
						
						htmlBook += '<div class="d-flex justify-content-between stats" style="margin-top: 10px">';
						htmlBook += '<div><i class="fas fa-calendar"></i><span class="ml-2">' + book.diffforhumans + '</span></div>';
						htmlBook += '<div class="d-flex flex-row align-items-center">';
						htmlBook += '<div class="profiles">';
						
						$.each(book.authors, function(i, auth) { 
							htmlBook += '<img class="rounded-circle" style="cursor: pointer;" src="' + auth['profile_photo'] + '" width="30" title="' + auth['lastname'] + '">';						
						});
						
						htmlBook += '</div>';
						htmlBook += '</div>';
						htmlBook += '</div>';
						
						htmlBook += '</div>';
						htmlBook += '</div>';
						
						$('.collection_ime').append(htmlBook);
					});
					/*** Pagination ***/
					let pagination = '<div id="pagination-container"></div>';
                    $('#items_collection').append(pagination);
					var items = $(".collection_ime .collection-item");
					var numItems = items.length;
					console.log(numItems);
                    var perPage = 12;
					
					items.slice(perPage).hide();
					
					$('#pagination-container').pagination({
                        items: numItems,
                        itemsOnPage: perPage,
                        prevText: "&laquo;",
                        nextText: "&raquo;",
                        onPageClick: function (pageNumber) {
                            var showFrom = perPage * (pageNumber - 1);
                            var showTo = showFrom + perPage;
                            items.hide().slice(showFrom, showTo).show();
                        }
                    });
					
				}else{
					$('#no-result').css('display', "block");
				}
			},
            error:function(reason){
                console.log(reason);
            },
            complete:function(data){
                $("#loading-overlay").hide();
            }
		}, 5000);
	}
	
	/** Default collection **/
	get_collection();
	
	/** Lunch collection by criteria **/
	$('#search-collection-btn').on('click', function(event) {
        $('.collection_ime').html('');
        $('#pagination-container').html('');
    	get_collection();
    });
	
	$('#clear-search-btn').on('click', function(event) {
        $('.collection_ime').html('');
        $('#pagination-container').html('');
		$("#field2").val("any");
		$("#field1").val("any");
		$("#query1").val("contains");
		$("#query2").val("contains");
		$("#collection1").val("");
		$("#collection2").val("");
		$("#option_add").val("and");
		$("#theme").val("");
		$("#lang").val("");
		$("#year").val("");
		$("#type").val("");
		$("#page_book").val("");
    	get_collection();
    });	
});
</script>

<section class="" style="margin-top:-20px">
	
	<div class="row-fluid-wrapper row-depth-1 row-number-2 ">
		<div class="row-fluid ">
			<div class="span12 widget-span widget-type-widget_container " data-w="12" data-widget-type="widget_container" data-x="0" style="">
				<div class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" data-hs-cos-general-type="widget" data-hs-cos-type="module" id="hs_cos_wrapper_widget_1616529550031" style="">
					<section class="hsg-page-header" data-background="light" data-image-frame="background">
						<div class="hsg-page-header__bg-image hsg-page-header__bg--desktop" style="background-image: url('{{ asset('assets/img/contact/collection.jpg') }}">
							&nbsp;
						</div>
						
						<div class="hsg-page-header__container">
							<div class="hsg-page-header__content">
								<div class="hsg-page-header__text">
									<h1 class="hsg-page-header__heading">
										<span class="hs_cos_wrapper hs_cos_wrapper_widget_container hs_cos_wrapper_type_widget_container" data-hs-cos-general-type="widget_container" data-hs-cos-type="widget_container" id="hs_cos_wrapper_module_153737270786195" style="">
											Nos Collections - I.M.E
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
	
	<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto" style="background: #f3f3f3">
			
			<div class="search-info" style="text-align: justify">
				<!--p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia accusantium quibusdam consequatur ullam possimus corporis architecto, ratione alias necessitatibus voluptas, impedit iusto voluptates incidunt quia molestiae, provident beatae vitae et?</p-->
			</div>
			
			<div class="form-style-5">
				<div class="row">
					<div class="col-md-8">
						<fieldset>
							<legend style="margin-bottom: 50px;"><span class="number">1</span> {{ __('lang.Search query') }} </legend>
							
							<div style="display: inline-block;">
								<select id="field1" name="field1">
									<option value="any">{{ __('lang.Any field') }}</option>
									<option value="title">{{ __('lang.Title') }}</option>
									<option value="author">{{ __('lang.Author') }}</option>
									<option value="desc">{{ __('lang.Description') }}</option>
									<option value="keys">{{ __('lang.Mots clés') }}</option>
								</select>  
							</div>
							
							<div style="display: inline-block; margin-left:20px">
								<select id="query1" name="query1">
									<option value="contains">{{ __('lang.Contains') }}</option>
									<option value="exact">{{ __('lang.Is (Exact)') }}</option>
									<option value="startwith">{{ __('lang.Start with') }}</option>
									<option value="notcontains">{{ __('lang.Does not contain') }}</option>
								</select>  
							</div>
							
							<div style="display: inline-block; margin-left:20px">
								<input class="inputWidth1" type="text" id="collection1" name="collection1" placeholder="Collection *" style="width: 300px !important;">
							</div>
						</fieldset>
						
						<fieldset>
							
							<div style="/*display: inline-block;*/ width: 100px; margin: auto;">
								<select id="option_add" name="option_add">
									<option value="and">{{ __('lang.AND') }}</option>
									<option value="or">{{ __('lang.OR') }}</option>
								</select>  
							</div>
							
							<div style="display: inline-block;">
								<select id="field2" name="field2">
									<option value="any">{{ __('lang.Any field') }}</option>
									<option value="title">{{ __('lang.Title') }}</option>
									<option value="author">{{ __('lang.Author') }}</option>
									<option value="desc">{{ __('lang.Description') }}</option>
									<option value="keys">{{ __('lang.Mots clés') }}</option>
								</select>  
							</div>
							
							<div style="display: inline-block; margin-left:20px">
								<select id="query2" name="query2">
									<option value="contains">{{ __('lang.Contains') }}</option>
									<option value="exact">{{ __('lang.Is (Exact)') }}</option>
									<option value="startwith">{{ __('lang.Start with') }}</option>
									<option value="notcontains">{{ __('lang.Does not contain') }}</option>
								</select>  
							</div>
							
							<div style="display: inline-block; margin-left:20px">
								<input class="inputWidth2" type="text" id="collection2" name="collection2" placeholder="Collection *" style="width: 300px !important;">
							</div>
						</fieldset>
					</div>
				
					<div class="col-md-4" style="border-left: 1px solid black; padding: 0px 20px;">
						<fieldset>
							<legend><span class="number">2</span> {{ __('lang.Search code') }} </legend>

							<div>
								<select id="theme" name="theme" style="width: 70%;">
									<option value="">Thème</option>
									@foreach($themes as $theme)
										<option value="{{ $theme->name }}">{{ $theme->name }}</option>
									@endforeach
								</select>  
							</div>
							
							<div>
								<select id="lang" name="lang" style="width: 70%;">
									<option value="">Langue de publication</option>
									<option value="fr">Français</option>
									<option value="en">Anglais</option>
									<option value="en">Autres</option>
								</select>  
							</div>
							
							<div>
								<select id="year" name="year" style="width: 70%;">
									<option value="">Année de publication</option>
									@foreach(range(date('Y')-20, date('Y')) as $y)
										<option value="{{ $y }}">{{ $y }}</option>
									@endforeach
								</select>  
							</div>
							
							<div>
								<select id="type" name="type" style="width: 70%;">
									<option value="">Type de document</option>
									<option value="Article Presse">Article Presse</option>
									<option value="Article Académique">Article Académique</option>
									<option value="Livre">Livre</option>
									<option value="Mémoire et Thèse">Mémoire et Thèse</option>
									<option value="Document Institutionnel">Document Institutionnel</option>
									<option value="Revue">Revue</option>
								</select>  
							</div>
							
							<div>
								<select id="page_book" name="page_book" style="width: 70%;">
									<option value="">Nombre de page</option>
									<option value="49">0 - 50</option>
									<option value="99">50 - 100</option>
									<option value="101">Plus de 100</option>
								</select>  
							</div>

						</fieldset>
					</div>
				</div>

				<div style="text-align: center;">
					<button id="search-collection-btn" class="btn btn-primary btn-sm" type="button">Rechercher</button>
					<button id="clear-search-btn" style="margin-left:15px" class="btn btn-info btn-sm" type="button">Effacer</button>
				</div>
			</div>
				
			<div id="items_collection" class="mt-2 mb-2" style="border-top: 1px solid black; padding: 20px 0px;">
				<div class="row">
					<div class="col-md-12">
						<div class="d-flex flex-row justify-content-between align-items-center filters">
							<h6 style="font-weight:600" id="nbr_collections"></h6>
						</div>
					</div>
				</div>
				<div class="row mt-1 collection_ime">
				</div>
					
				<!--div class="d-flex justify-content-end text-right mt-2">
					<nav>
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav>
				</div-->
			</div>
			<div id="no-result" style="display: none">
				<hr style="display: block;flex: auto;height: 1px;margin-left: 20px;border-top: 1.5px solid #003366 !important;"/>
				<div style="text-align: center;background: papayawhip;"><strong>{{__('Aucune collection trouvée !')}}</strong><br><i class='fas fa-info-circle'></i> {{__('Nous n\'avons trouvé la collection dans la bibliothèque.')}}</div>
			</div>
		
	</div>
	
</section>
@endsection