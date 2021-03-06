<!DOCTYPE html>
<html>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>@yield('title')</title>

	<meta name="keywords" content="Open Library" />
	<meta name="description" content="IFOLIB - Informatic Open Library">
	<meta name="author" content="Azzam Jihad Ulhaq">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('')}}vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/animate/animate.min.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('')}}css/theme.css">
	<link rel="stylesheet" href="{{asset('')}}css/theme-elements.css">
	<link rel="stylesheet" href="{{asset('')}}css/theme-blog.css">
	<link rel="stylesheet" href="{{asset('')}}css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="{{asset('')}}vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="{{asset('')}}vendor/rs-plugin/css/navigation.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="{{asset('')}}css/demos/demo-education.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('')}}css/skins/skin-education.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{asset('')}}css/custom.css">

	<!-- Head Libs -->
	<script src="{{asset('')}}vendor/modernizr/modernizr.min.js"></script>

</head>

<body>

	<div class="body">
		<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 52, 'stickySetTop': '-52px'}">
			<div class="header-body border-top-0 bg-dark box-shadow-none">
				<div class="header-top header-top-borders header-top-light-borders">
					<div class="container h-100">
						<div class="header-row h-100">
							<div class="header-column justify-content-start">
								<div class="header-row">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
												<span class="ws-nowrap text-light pl-0"><span class="opacity-7">Phone:</span> <a class="text-light" href="tel:+62315939214">031 5939214 PABX 107</a></span>
											</li>
											<li class="nav-item nav-item-borders py-2">
												<span class="ws-nowrap text-light"><span class="opacity-7">Email:</span> <a class="text-light" href="mailto:eva.mursidah@gmail.com">eva.mursidah@gmail.com</a></span>
											</li>
											<li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
												<span class="ws-nowrap text-light"><span class="opacity-7">Time:</span> Mon-Fri 8:00am - 3:00pm</span>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<nav class="header-nav-top">
										@guest
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
												<a href="/login" class="text-light"><i class="icon-login icons p-relative" style="top: 0;"></i> Login</a>
											</li>
											<li class="nav-item nav-item-borders py-2 pr-0 dropdown">
												<a href="/register" class="text-light pr-0"><i class="fas fa-pencil-alt"></i> Register</a>
											</li>
										</ul>
										@else
										<ul class="nav nav-pills">
											<li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
												<a href="/home" class="text-light"><i class="icon-home icons p-relative" style="top: 0;"></i> Dashboard</a>
											</li>
											<li class="nav-item nav-item-borders py-2 pr-0 dropdown">
												<a href="/logout" class="text-light pr-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-logout icons"></i> Logout</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
											</li>
										</ul>
										@endguest
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-container header-container-height-sm container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<br>
									<h1>
										<strong>
											<a href="{{url('/')}}">
												<!-- <img alt="Porto" width="100" height="48" src="img/demos/education/logo.png"> -->
												Informatic Open Library
											</a>
										</strong>
									</h1>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
									<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li>
													<a class="nav-link" href="{{ url('/') }}">
														Home
													</a>
												</li>
												<!-- <li>
														<a class="nav-link" href="#">
															About Us
														</a>
													</li> -->
												<!-- <li>
														<a class="nav-link" href="#">
															E-resources Class
														</a>
													</li> -->
												<!-- <li>
														<a class="nav-link" href="#">
															Blog
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Contact Us
														</a>
													</li> -->
											</ul>
										</nav>
									</div>
									{{-- <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button> --}}
								</div>
								<div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
									<div class="header-nav-feature header-nav-features-search d-inline-flex">
										<a href="#" class="header-nav-features-toggle">MENU</a>
										<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<div class="simple-search input-group">
													<a class="nav-link" href="{{ route('oer.index') }}">
															Open Education Resources
													</a>
													<!-- <a class="nav-link" href="{{ route('oer.classification') }}">
															Classification
													</a> -->
												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div role="main" class="main">
			@yield('main-content')
		</div>

		<footer id="footer" class="bg-color-quaternary border-top-0 mt-0">
			<div class="container">
				<div class="row justify-content-between pt-5 pb-4">
					<div class="col-md-6 col-lg-6 mb-6 mb-lg-6">
						<h2 class="font-weight-semibold text-color-light text-6 mb-3">Contact Details</h2>
						<p>Jl. Teknik Kimia - Gedung Informatika
							Kampus Institut Teknologi Sepuluh Nopember Surabaya
							Jalan Raya ITS, Sukolilo, Surabaya 60111, Indonesia
						</p>
						<span class="d-block text-5 mb-2">
							Call: <a href="tel:++62315939214" class="text-3">031 5939214 PABX 107</a>
						</span>
						<span class="d-block text-5 mb-4">
							Email: <a href="mailto:eva.mursidah@gmail.com" class="text-3">eva.mursidah@gmail.com</a>
						</span>
						<ul class="social-icons social-icons-transparent">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
					<div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
						<!-- Histats.com  (div with counter) -->
						<div id="histats_counter"></div>
						<!-- Histats.com  START  (aync)-->
						<script type="text/javascript">
							var _Hasync = _Hasync || [];
							_Hasync.push(['Histats.start', '1,4285793,4,436,112,75,00011011']);
							_Hasync.push(['Histats.fasi', '1']);
							_Hasync.push(['Histats.track_hits', '']);
							(function() {
								var hs = document.createElement('script');
								hs.type = 'text/javascript';
								hs.async = true;
								hs.src = ('//s10.histats.com/js15_as.js');
								(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
							})();
						</script>
						<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4285793&101" alt="site hit counter" border="0"></a></noscript>
						<!-- Histats.com  END  -->
					</div>
					<!-- <div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Courses</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Archaeology</a></li>
										<li><a href="demo-education-courses-detail.html">Architecture</a></li>
										<li><a href="demo-education-courses-detail.html">Art & Design</a></li>
										<li><a href="demo-education-courses-detail.html">Aural & Oral Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Biological Sciences</a></li>
										<li><a href="demo-education-courses-detail.html">Building</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-unstyled mb-0">
										<li><a href="demo-education-courses-detail.html">Management Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Celtic Studies</a></li>
										<li><a href="demo-education-courses-detail.html">Chemical Engineering</a></li>
										<li><a href="demo-education-courses-detail.html">Chemistry</a></li>
										<li><a href="demo-education-courses-detail.html">Civil Engineering</a></li>
										<li><a href="demo-education-courses-detail.html" class="text-color-primary">Much More</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="row">
								<div class="col">
									<h2 class="font-weight-semibold text-color-light text-6 mb-3">Newsletter</h2>
									<div class="newsletter">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam.</p>
					
										<div class="alert alert-success d-none" id="newsletterSuccess">
											<strong>Success!</strong> You've been added to our email list.
										</div>
					
										<div class="alert alert-danger d-none" id="newsletterError"></div>
					
										<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
											<div class="input-group custom-input-group-style-1">
												<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
												<span class="input-group-append">
													<button class="btn btn-primary px-4" type="submit">Subscribe</button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div> -->
				</div>
			</div>
			<div class="footer-copyright bg-color-quaternary border-top-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<p class="text-center">© Copyright 2019. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- Vendor -->
	<script src="{{asset('')}}vendor/jquery/jquery.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="{{asset('')}}vendor/popper/umd/popper.min.js"></script>
	<script src="{{asset('')}}vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('')}}vendor/common/common.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="{{asset('')}}vendor/isotope/jquery.isotope.min.js"></script>
	<script src="{{asset('')}}vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="{{asset('')}}vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('')}}vendor/vide/jquery.vide.min.js"></script>
	<script src="{{asset('')}}vendor/vivus/vivus.min.js"></script>
	<script src="{{asset('')}}vendor/jquery.countdown/jquery.countdown.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('')}}js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{asset('')}}vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{asset('')}}vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="{{asset('')}}js/views/view.contact.js"></script>

	<!-- Demo -->
	<script src="{{asset('')}}js/demos/demo-education.js"></script>

	<!-- Theme Custom -->
	<script src="{{asset('')}}js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="{{asset('')}}js/theme.init.js"></script>

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-143785992-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>

</html>