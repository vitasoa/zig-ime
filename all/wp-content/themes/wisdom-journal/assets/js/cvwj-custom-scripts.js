jQuery(document).ready(function($) {

    "use strict";

	
	var grid = document.querySelector(
            '.cv-content-masonry-wrapper'
        ),
        masonry;

    if (
        grid &&
        typeof Masonry !== undefined &&
        typeof imagesLoaded !== undefined
    ) {
        imagesLoaded( grid, function( instance ) {
            masonry = new Masonry( grid, {
                itemSelector: '.hentry'
            } );
        } );
    }

});