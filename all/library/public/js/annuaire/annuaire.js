$(document).ready(function($) {
	$("#loading-overlay").hide();
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	
	function get_annuaire() {
        $.ajax({
            url: '/library/getAnnuaires',
            method: 'GET',
            data: {
                query_name: $('#name_annuaire').val(),
                parcours: $('#parcours').val(),
                promotion: $('#promotion').val(),
                domaines : $('#domaines').val(),
				nationality: $('#nationality').val(),
                genre: $('#genre').val(),
                employer : $('#employer').val(),
            },
            beforeSend: function () {
                $("#loading-overlay").show();
            },
            success: function(response){
				if (response) {
					// console.log(response);
					$('#no-result').css('display', "none");
					if (response.length === 0) {
						$('#no-result').css('display', "block");
					}					
					$.each(response, function(i, pers) {
						//console.log(pers);
						var htmlPers = '';
						htmlPers += '<div class="person">';
						htmlPers += '<div class="person-content">';
						htmlPers += '<div class="person-content-inner">';
						if (pers.photo){
							htmlPers += '<img class="img img1" src="' + pers.photo + '"/>';
						}else{
							if (pers.genre == "Masculin") {
								htmlPers += "<img class='img img1' src='/library/assets/img/icons/male.png'/>";
							} else {
								htmlPers += "<img class='img img1' src='/library/assets/img/icons/female.png'/>";
							}
						}
						htmlPers += '</div>';
						htmlPers += '</div>';
						htmlPers += '<div class="divider">';
						htmlPers += '</div>';
						
						htmlPers += '<div style="height: 100px; line-height: 16px;">';
						htmlPers += '<div class="name">' + pers.titre + " " + pers.prenom + " " + '<br/>' + pers.nom;
						htmlPers += '</div>';
						// console.log(pers);
						htmlPers += '<span class="click-this-' + pers.id + '" onclick="showAllContacts(' + pers.id + ',' + pers.share + ')" style="position: relative;z-index: 999;cursor: pointer;font-size: 12px;text-align: center;display: block;color: #7d7bff;">Voir les contacts <i class="fas fa-eye"></i></span>';
						
						htmlPers += '<div class="title admin-contact-' + pers.id + '" style="display: none"> Envoyer un e-mail à l\'Administrateur du site : <a href="mailto:ime.energies.mg@gmail.com"><span><i class="fas fa-envelope-square"></i> <span> ime.energies.mg@gmail.com</a></div>';
						
						htmlPers += '<div class="all-contacts-' + pers.id + '">';
						if (!pers.job){
							htmlPers += '<div class="title">';
						}else{
							htmlPers += '<div class="title">' + pers.job + " à " + pers.entreprise;
						}
						htmlPers += '</div>';
						htmlPers += '<div class="title">';
						htmlPers += '</div>';
						if (!pers.promotion){
							htmlPers += '<div class="promotion">' + pers.formation;
						}else{
							htmlPers += '<div class="promotion">' + pers.formation + " / " + pers.promotion;
						}
						htmlPers += '</div>';
						htmlPers += '</div>';
						htmlPers += '</div>';
						
						htmlPers += '<div class="all-contacts-' + pers.id + '" style="height: 100px; line-height: 16px; margin-top: 20px;">';
						htmlPers += '<div class="title">';
						var tphone = pers.phone;
						if (tphone == ""){
							tphone = pers.mobile;
						}
						if (tphone != "" && tphone != null){
						htmlPers += '<span>';
						htmlPers += '<i class="fas fa-phone">';
						htmlPers += '</i> ' + tphone;
						htmlPers += '<span>';
						}						
						htmlPers += '</div>';
						htmlPers += '<div class="title">';
						if (pers.email){
							htmlPers += '<a href="mailto:' + pers.email + '"><span><i class="fas fa-envelope-square"></i> <span> ' + pers.email + '</a>';
						}
						htmlPers += '</div>';
						htmlPers += '<div style="font-size: 12px;text-align: center;display: grid;">';
						if (pers.facebook){
							htmlPers += '<span>';
							htmlPers += '<i class="fab fa-facebook">';
							htmlPers += '</i> '+ pers.facebook;
							htmlPers += '</span> ';
						} 
						if (pers.twitter){
						htmlPers += '<span>';
						htmlPers += '<i class="fab fa-twitter">';
						htmlPers += '</i> ' + pers.twitter;
						htmlPers += '</span> ';
						}
						if (pers.siteweb){
						htmlPers += '<span>';
						htmlPers += '<i class="fas fa-globe">';
						htmlPers += '</i> ' + pers.siteweb; 
						htmlPers += '</span> ';
						}
						htmlPers += '</div>';
						htmlPers += '</div>';
						
						htmlPers += '</div>';
						
						$('.annuaire').append(htmlPers);
					});	
					
					/*** Pagination ***/
					let pagination = '<div id="pagination-container"></div>';
                    $('.annuaire-items').append(pagination);
					var items = $(".annuaire .person");
					var numItems = items.length;
					console.log(numItems);
                    var perPage = 24;
					
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
	
	/** Default annuaire **/
	get_annuaire();
	
	/** Lunch search by criteria **/
	$('#search-annuaire-btn').on('click', function(event) {
        $('.annuaire').html('');
        $('#pagination-container').html('');
    	get_annuaire();
    });
	
	$('#clear-search-btn').on('click', function(event) {
        $('.annuaire').html('');
        $('#pagination-container').html('');
		$("#name_annuaire").val("");
		$("#promotion").val("");
		$("#domaines").val("");
		$("#parcours").val("");
		$("#nationality").val("");
		$("#genre").val("");
		$("#employer").val("");
    	get_annuaire();
    });
});

function showAllContacts(id, share){
	if (share == 1){
		$('.all-contacts-' + id).show();
		$('.click-this-' + id).hide();
	}else{
		$('.admin-contact-' + id).show();
		$('.click-this-' + id).hide();
	}
}