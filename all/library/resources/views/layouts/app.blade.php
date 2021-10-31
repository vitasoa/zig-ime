<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<title>@yield('pageTitle') – Institut pour la Maîtrise de l'Energie </title> 
		
		<link rel="icon" href="/wp-content/uploads/2018/11/cropped-LOGO-2_IME-32x32.png" sizes="32x32">
		<link rel="icon" href="/wp-content/uploads/2018/11/cropped-LOGO-2_IME-192x192.png" sizes="192x192">
		<link rel="apple-touch-icon-precomposed" href="/wp-content/uploads/2018/11/cropped-LOGO-2_IME-180x180.png">
		
		<!-- Styles -->
		<link href="{{asset('css/app.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/annuaire/annuaire.js') }}"></script>
		<script src="{{ asset('js/jquery.simplePagination.js') }}"></script>
		<!-- Fonts -->
		<link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
		
		<link href="{{asset('css/contact.css')}}" rel="stylesheet">
		
		<link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
		<link href="{{asset('css/simplePagination.css')}}" rel="stylesheet">
		
		<link href="/wp-content/themes/freesia-empire/style.css" rel="stylesheet">
		<link rel="stylesheet" id="bwg_font-awesome-css" href="/wp-content/plugins/photo-gallery/css/font-awesome/font-awesome.css" type="text/css" media="all">
		<link rel="stylesheet" id="bwg_mCustomScrollbar-css" href="/wp-content/plugins/photo-gallery/css/jquery.mCustomScrollbar.css" type="text/css" media="all">
		<link rel="stylesheet" id="genericons-css" href="/wp-content/themes/freesia-empire/genericons/genericons.css" type="text/css" media="all">
		<link rel="stylesheet" id="freesiaempire-responsive-css" href="/wp-content/themes/freesia-empire/css/responsive.css" type="text/css" media="all">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
		<script type='text/javascript' src='/wp-content/themes/freesia-empire/js/freesiaempire-main.js?ver=4.9.18'></script>
		<script type="text/javascript" src="/wp-content/themes/freesia-empire/js/freesiaempire-sticky-scroll.js"></script>

	</head>
	<body class="home page-template page-template-page-templates page-template-freesiaempire-corporate page-template-page-templatesfreesiaempire-corporate-php page page-id-249 custom-background tf-business-template page-template-default">
		<div id="page" class="hfeed site">
			<div class="normes-ul-entete-ul"></div>
			<header id="masthead" class="site-header">
				<div class="top-header">
					<div class="container clearfix">
						<div id="site-branding">
							<a href="/" title="Institut pour la Maîtrise de l'Energie" rel="home"> 
							<img src="/wp-content/uploads/2018/11/logo-B-Copie-1.png" id="site-logo" alt="Institut pour la Maîtrise de l'Energie"></a>
						</div>
						<!-- end #site-branding -->
						<div class="menu-toggle">
							<div class="line-one">
							</div>
							<div class="line-two">
							</div>
							<div class="line-three">
							</div>
							<div class="line-four">
							</div>
						</div>
						<div class="header-info clearfix">
							<div class="header-social-block">
								<div class="social-links clearfix">
									<ul>
										<li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
											<a href="http://facebook.com"><span class="screen-reader-text">Facebook</span></a>
										</li>
										<li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
											<a href="http://twitter.com"><span class="screen-reader-text">Twitter</span></a>
										</li>
										<li id="menu-item-159" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-159">
											<a href="http://plus.google.com"><span class="screen-reader-text">Google Plus</span></a>
										</li>
									</ul>
								</div>
								<!-- end .social-links -->
							</div>
							<!-- end .header-social-block -->
							<!-- Contact Us=============================================-->
							<div id="freesiaempire_contact_widgets-1" class="info clearfix">
								<ul>
									<li class="address">
										<a href="" title="Université d'Antananarivo" target="_blank">Université d'Antananarivo</a>
									</li>
									<li class="phone-number">
										<a href="tel:261202231191" title="(261 20) 22 311 91">(261 20) 22 311 91</a>
									</li>
									<li class="email">
										<a href="mailto:contact@ime.mg" title="">contact@ime.mg</a>
									</li>
								</ul>
							</div>
							<!-- end .contact_widget -->
						</div>
						<!-- end .header-info -->
					</div>
					<!-- end .container -->
				</div>
				<!-- end .top-header -->
				
				@auth
				<div id="user-box" class="clearfix">
					<ul>
						<li class="ps-lg-5 nav-item dropdown" style="list-style: none;">
							
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->lastname }} {{ Auth::user()->name }}
							</a>
							
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('home') }}">Tabelau de bord</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('profile.info') }}">Profil</a>
								<div role="separator" class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									Déconnexion
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
					</ul>
				</div>
				@endauth
				
				<!-- Main Header=============================================-->
				<div id="sticky_header" style="position: relative; border-bottom: 1px solid rgba(0, 0, 0, 0.1); box-shadow: none; top: 0px; left: 0px;">
					<div class="container clearfix">
						<!-- Main Nav=============================================-->
						<nav id="site-navigation" class="main-navigation clearfix">
							<button class="menu-toggle-2" aria-controls="primary-menu" aria-expanded="false">
							</button>
							<!-- end .menu-toggle -->
							<ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
								<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-116">
									<a href="/">Accueil</a>
								</li>
								<li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115">
									<a href="/actus">Actualités</a>
								</li>
								<li id="menu-item-302" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-302" aria-haspopup="true">
									<a>Présentation</a>
									<ul class="sub-menu">
										<li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-114 current_page_item menu-item-117">
											<a href="/presentation">Descriptions &amp; Missions</a>
										</li>
										<li id="menu-item-308" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-308">
											<a href="/services-offerts">Services offerts</a>
										</li>
									</ul>
								</li>
								<li id="menu-item-190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190">
									<a href="/gallery">Galerie</a>
								</li>
								<li id="menu-item-195" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195">
									<a href="/contactez-nous">Contactez-nous</a>
								</li>
								<li id="menu-item-162" class="highlight menu-item menu-item-type-custom menu-item-object-custom {{  request()->routeIs('collection.*') ? 'current-menu-ancestor' : '' }} menu-item-has-children menu-item-162" aria-haspopup="true">
									<a>Ressources</a>
									<ul class="sub-menu">
										<li id="menu-item-650" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-650">
											<a href="/library">Bibliothèque virtuelle</a>
										</li>
										<li id="menu-item-651" class="highlight menu-item menu-item-type-custom {{  request()->routeIs('annuaires.*') ? 'current-menu-ancestor' : '' }} menu-item-object-custom menu-item-651">
											<a href="/library/annuaires">Annuaires</a>
										</li>
									</ul>
								</li>
								
							</ul>
						</nav>
						<!-- end #site-navigation -->
					</div>
					<!-- end .container -->
				</div>
				<!-- end #sticky_header -->
				
				<div class="page-header clearfix">
					<div class="container">
						<h1 class="page-title">
							@yield('pageTitle')
						</h1>
						<!-- .page-title -->
					</div>
					<!-- .container -->
				</div>
				<!-- .page-header -->
			</header>
			
			<!--===============================================-->
			<!--script src="assets/js/popper.min.js"></script-->
			<!--script src="{{ asset('assets/js/bootstrap.min.js') }}"></script-->
			<!--script src="{{ asset('assets/js/is.min.js') }}"></script-->
			<!--script src="{{ asset('assets/js/theme.js') }}"></script-->
			
			<main id="content">
				@yield('content')
			</main>
			
			<footer id="colophon" class="site-footer clearfix">
				<div class="widget-wrap">
					<div class="container">
						<div class="widget-area clearfix">
							<div class="column-4">
								<aside id="text-3" class="widget widget_text">
									<h3 class="widget-title">
										Partenaires
									</h3>
									<div class="textwidget">
										<div class="sidebar-ime">
											<img class="img-ime" alt="Hawai'i Pacific" src="/wp-content/uploads/2018/11/partners.png">
										</div>
									</div>
								</aside>
							</div>
							<!-- end .column4 -->
							<div class="column-4">
								<aside id="categories-2" class="widget widget_categories">
									<h3 class="widget-title">
										Catégories
									</h3>
									<ul>
										<li class="cat-item cat-item-12">
											<a href="/category/actus" title="Les actualités au sein de l'Institut.">ACTUALITÉS</a>
										</li>
										<li class="cat-item cat-item-2">
											<a href="/category/events" title="Les événements sur l'Institut.">ÉVÉNEMENTS</a>
										</li>
									</ul>
								</aside>
							</div>
							<div class="column-4">
								<aside id="archives-2" class="widget widget_archive">
									<h3 class="widget-title">Archives</h3>
									<ul>
										<li><a href="/2020/11">novembre 2020</a></li>
										<li><a href="/2019/08">août 2019</a></li>
										<li><a href="/2019/03">mars 2019</a></li>
										<li><a href="/2019/02">février 2019</a></li>
										<li><a href="/2018/11">novembre 2018</a></li>
										<li><a href="/2018/07">juillet 2018</a></li>
										<li><a href="/2016/01">janvier 2016</a></li>
									</ul>
								</aside>
							</div>
							<div class="column-4">
								<!-- Contact Us=============================================-->
								<aside id="freesiaempire_contact_widgets-3" class="widget widget_contact">
									<h3 class="widget-title">
										Nous-Contactez
									</h3>
									<!-- end .widget-title -->
									<ul>
										<li class="address">
											<a href="http://www.ime.mg" title="Institut pour la Maîtrise de l’Energie" target="_blank">Institut pour la Maîtrise de l’Energie</a>
										</li>
										<li class="phone-number">
											<a href="tel:261202231191" title="(261 20) 22 311 91">(261 20) 22 311 91</a>
										</li>
										<li class="phone-number">
											<a href="tel:261202227926" title="Fax : (261 20) 22 279 26">Fax : (261 20) 22 279 26</a>
										</li>
										<li class="email">
											<a href="mailto:contact@ime.mg" title="">contact@ime.mg</a>
										</li>
									</ul>
								</aside>
								<!-- end .contact_widget -->
								<aside id="custom_html-10" class="widget_text widget widget_custom_html">
									<h3 class="widget-title">
										Accès WEBMAIL
									</h3>
									<div class="textwidget custom-html-widget">
										<div class="cgv">
											<a href="https://wm.simafri.com/aser29/" target="new">Accès webmail</a>
										</div>
									</div>
								</aside>
							</div>
							<!--end .column4-->
						</div>
						<!-- end .widget-area -->
					</div>
					<!-- end .container -->
				</div>
				<!-- end .widget-wrap -->
				<div class="site-info">
					<div class="container">
						<div class="social-links clearfix">
							<ul>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
									<a href="http://facebook.com"><span class="screen-reader-text">Facebook</span></a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
									<a href="http://twitter.com"><span class="screen-reader-text">Twitter</span></a>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-159">
									<a href="http://plus.google.com"><span class="screen-reader-text">Google Plus</span></a>
								</li>
							</ul>
						</div>
						<!-- end .social-links -->
						<div class="copyright">
							© 2021
							<a title="Institut pour la Maîtrise de l'Energie" target="_blank" href="/">Institut pour la Maîtrise de l'Energie</a>
							|
							<a href="/conditions-generales-dutilisation/">Conditions générales d'utilisation</a>
							<!-- ?php _e('Designed by:','freesia-empire'); ?> <a title="Themefreesia" target="_blank" href="https://themefreesia.com">Thème Freesia</a> | 
							Propulsé par: <a title="WordPress" target="_blank" href="http://wordpress.org">WordPress</a -->
						</div>
						<div style="clear:both;">
						</div>
					</div>
					<!-- end .container -->
				</div>
				<!-- end .site-info -->
				<div class="go-to-top" style="display: none;">
					<a title="Retour en Haut" href="#masthead"></a>
				</div>
				<!-- end .go-to-top -->
			</footer>
		</div>		
	</body>

</html>