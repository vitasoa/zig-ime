jQuery(document).ready(function($) {

    $(".powerwp-nav-primary .powerwp-nav-menu").addClass("responsive-menu").before('<div class="powerwp-responsive-menu-icon"></div>');

    $(".powerwp-responsive-menu-icon").click(function(){
        $(this).next(".powerwp-nav-primary .powerwp-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1076) {
            $(".powerwp-nav-primary .powerwp-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".responsive-menu > li").removeClass("menu-open");
        }
    });

    $(".responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
    });

    $("div.powerwp-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
    });

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="powerwp-scroll-top"></div>');
    var scrollButtonEl = $( '.powerwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.powerwp-scroll-top' ).fadeOut();
        } else {
            $( '.powerwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    $('.powerwp-main-wrapper, .powerwp-sidebar-one-wrapper, .powerwp-sidebar-two-wrapper').theiaStickySidebar({
        containerSelector: ".powerwp-content-inner-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 1107,
    });

});