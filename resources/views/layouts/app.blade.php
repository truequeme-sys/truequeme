<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="" content="" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
 
	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{asset('css/components/datepicker.css')}}" type="text/css" />

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="{{asset('css/components/bs-filestyle.css')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Truequeme</title>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '565704127472913');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=565704127472913&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body class="stretched">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168728188-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168728188-1');
	</script>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header page-section dark">

				<div id="header-wrap">
	
					<div class="container clearfix">
	
						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
	
						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{ route('home') }}" class="standard-logo" data-dark-logo="{{url('images/logo-dark.png')}}"><img src="{{url('images/logo.png')}}" alt="Truequeme"></a>
							<a href="{{ route('home') }}" class="retina-logo" data-dark-logo="{{url('images/logo-dark@2x.png')}}"><img src="{{url('images/logo@2x.png')}}" alt="Truequeme"></a>
						</div><!-- #logo end -->
	
						<!-- Primary Navigation
						============================================= -->
						<nav id="primary-menu">
	
							<ul>
								@auth
								<li><a href="{{ route('perfil.edit') }}"><div>Perfil</div></a></li>
								<li><a href="{{route('MisTrueques')}}"><div>Publicar Trueque</div></a></li>
								<li><a href="#"><div>Buscar Empresa</div></a></li>
								<li><a href="{{ route('trueques.index') }}"><div>Buscar Trueque</div></a></li>	
								<li><a href="#"><div>Invitar</div></a></li>	
								@endauth
							</ul>
	
						</nav><!-- #primary-menu end -->
	
					</div>
	
				</div>
	
			</header><!-- #header end -->

		<!-- Content
		============================================= -->

		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Derechos Reservados &copy; 2020 Todos los Derechos Reservados Truequeme.<br>
						<div class="copyright-links"><a href="#">Términos de uso</a> / <a href="#">Política de
								Privacidad</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@trueqeme.com <span class="middot">&middot;</span> <i
							class="icon-headphones"></i> +52-1-5555-5555 <span class="middot">&middot;</span>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{{asset('js/plugins.js')}}}"></script>

	<!-- DatePicker JS -->
	<script src="{{asset('js/components/datepicker.js')}}"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script src="{{asset('js/components/bs-filestyle.js')}}"></script>

	<!-- TinyMCE Plugin -->
	<script src="{{asset('js/components/tinymce/tinymce.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>

	<script>
		jQuery(document).ready( function(){
			$('.dobpicker').datepicker({
				autoclose: true,
			});

			$("#jobs-application-resume").fileinput({
				required: true,
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});

			tinymce.init({
				selector: '#jobs-application-message',
				menubar: false,
				setup: function(editor) {
					editor.on('change', function(e) {
						editor.save();
					});
				}
			});
		})
	</script>

	@yield('scripts')

</body>

</html>