jQuery(document).ready(function($) {

    // grab the initial top offset of the navigation 
    var freshwpstickyNavTop = $('.freshwp-menu-outer-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var freshwpstickyNav = function(){
        var freshwpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (freshwpscrollTop > freshwpstickyNavTop) { 
            $('.freshwp-menu-outer-container').addClass('freshwp-fixed');
        } else {
            $('.freshwp-menu-outer-container').removeClass('freshwp-fixed'); 
        }
    };

    freshwpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        freshwpstickyNav();
    });

    $(".freshwp-nav-primary .freshwp-nav-menu").addClass("responsive-menu").before('<div class="freshwp-responsive-menu-icon"></div>');

    $(".freshwp-responsive-menu-icon").click(function(){
        $(this).next(".freshwp-nav-primary .freshwp-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1076) {
            $(".freshwp-nav-primary .freshwp-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
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

    $("div.freshwp-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("menu-open");
        });
    });

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="freshwp-scroll-top"></div>');
    var scrollButtonEl = $( '.freshwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.freshwp-scroll-top' ).fadeOut();
        } else {
            $( '.freshwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    $('.freshwp-main-wrapper, .freshwp-sidebar-one-wrapper, .freshwp-sidebar-two-wrapper').theiaStickySidebar({
        containerSelector: ".freshwp-content-inner-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 1107,
    });

});