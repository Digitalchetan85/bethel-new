{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<meta name="format-detection" content="telephone=no"> --}}
	{{-- <link rel="icon" href="favicon.ico"> --}}
	<title>Bethel Computer</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('assets/css/plugins/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins/bootstrap-submenu.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins/animate.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins/slick.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/plugins/bootstrap-datetimepicker.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
	<!-- Icon Font-->
	<link href="{{ asset('assets/iconfont/style.css')}}" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Chivo:400,400i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- Google map -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<body class="home">
	<!-- Loader -->
	{{-- <div id="loader-wrapper" class="loader-on">
		<div id="loader">
			<div class="battery">
				<span class="battery_item"></span>
				<span class="battery_item"></span>
				<span class="battery_item"></span>
			</div>
			<div class="text">Loading ...</div>
		</div>
	</div> --}}
	<!-- //Loader -->
	<!-- Header -->
	<header class="page-header" style="background: url({{asset('assets/images/header-bg.jpg')}}) no-repeat center top;">
		<!-- Fixed navbar -->
		<nav class="navbar" id="slide-nav">
			<div class="container">
				<div class="navbar-header">
					<div class="mobile-topline">
						<button type="button" class="navbar-toggle"><i class="icon icon-interface icon-menu"></i><i class="icon icon-cancel"></i></button>
						<div class="phone-number"><span>+91 88804 70007</span></div>
					</div>
					<div class="header-top">
						<div class="row">
							<div class="col-sm-6">
								<div class="logo"> <a href="{{route('home')}}" class="text-white text-decoration-none"><span class="hidden-xs">Bethel <span class="text-info">Computech</span></span>
									<span class="visible-xs">Bethel <span class="text-info">Computech</span></span>
									</a> </div>
							</div>
							<div class="col-sm-6">
								<div class="phone">
									<div class="phone-wrapper">
										<div class="under-number">Need tech support?</div>
										<div class="number"><span>+91 88804 70007</span></div>
									</div>
									<div class="right-text">
										<div class="item arrow animation hoveranimation" data-animation="rotateInUpRight" data-animation-delay="0.5s"><img src="{{asset('assets/images/call-us-arrow-1.png')}}" alt=""></div>
										<div class="item text1 animation hoveranimation" data-animation="fadeInUp" data-animation-delay="0.75s"><img src="{{asset('assets/images/call-us-arrow-2.png')}}" alt=""></div>
										<div class="item text2 animation hoveranimation" data-animation="fadeInUp" data-animation-delay="1s"><img src="{{asset('assets/images/call-us-arrow-3.png')}}" alt=""></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="slidemenu" data-hover="dropdown" data-animations="fadeIn" class="bg-info text-white">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/" class="">Home</a></li>
                        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="">About</a></li>
                        <li class="dropdown {{ Request::is('service') ? 'active' : '' }}"><a href="#" data-toggle="dropdown" data-submenu=""
                                class="">Services<span class="ecaret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('services.laptop-repair')}}">Laptop Repair</a></li>
                                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('services.pc-repair')}}">PC Repair</a></li>
                                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('services.mac-repair')}}">Mac Repair</a></li>
                                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('services.data-backup')}}">Data Backup and Recovery</a></li>
                                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('services.software-installation')}}">Malware and Virus Removal</a></li>
                                <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('services.hardware-updates')}}">Software Installation</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('laptop') ? 'active' : '' }}"><a href="{{route('laptop')}}" class="">Laptop</a>
                        </li>
                        {{-- <li class="dropdown"><a href="blog.html" data-toggle="dropdown" data-submenu=""
                                class="">Blog<span class="ecaret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog.html">Blog Classic</a></li>
                                <li><a href="blog-card.html">Blog Post Card</a></li>
                                <li><a href="blog-single.html">Blog Single post</a></li>
                            </ul>
                        </li> --}}
                        <li class="{{ Request::is('desktop') ? 'active' : '' }}"><a href="{{route('desktop')}}" class="">Desktop</a>
                        </li>
                        <li class="{{ Request::is('monitor') ? 'active' : '' }}"><a href="{{route('monitor')}}" class="">Monitor</a>
                        </li>
                        {{-- <li><a href="faq.html" class="">Tips & FAQ</a>
                        </li>
                        <li><a href="shop.html" class="">Shop</a> </li> --}}
                        <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}" class="">Contact</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->utype === 'ADM')
                                    <li class="dropdown"><a href="blog.html" data-toggle="dropdown" data-submenu=""
                                            class="">{{ Auth::user()->name }}<span
                                                class="ecaret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="{{ Request::is('admin.products') ? 'active' : '' }}"><a href="{{route('admin.products')}}">Products</a></li>
                                            <li><a href="{{route('admin.addproducts')}}">Add New Product</a></li>
											<li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a></li>
											<form action="{{route('logout')}}" id="logout-form" method="post">
												@csrf
											</form>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown"><a href="blog.html" data-toggle="dropdown" data-submenu=""
                                            class="">{{ Auth::user()->name }}<span
                                                class="ecaret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a></li>
											<form action="{{route('logout')}}" id="logout-form" method="post">
												@csrf
											</form>
                                        </ul>
                                    </li>
                                @endif
                            @else
                                <li class="d-none" style="display: none"><a href="{{ route('register') }}" class="">Register</a>
                                </li>
                                <li class="d-none" style="display: none"><a href="{{ route('login') }}" class="">Login</a>
                                </li>
                            @endif

                            @endif
                        </ul>
                    </div>
                </div>
			</div>
		</nav>
	</header>
	<!-- // Header -->

    {{$slot}}

    <!-- Footer -->
	<div class="page-footer">
		<div class="footer-content">
			<div class="back-to-top"><a href="#top"><span class="icon icon-chevron-arrow-up"></span></a></div>
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<div class="logo">
							<div class="text-center">
								<img src="{{asset('assets/images/new/logo.png')}}" alt="Logo" class="" />
							</div>
						</div>
					</div>
					<div class="col-md-11">
						<ul class="footer-menu">
							<li><a href="#">iPad Repair</a></li>
							<li><a href="{{route('services.laptop-repair')}}">Laptop Repair</a></li>
							<li><a href="{{route('services.mac-repair')}}">Mac Repair</a></li>
							<li><a href="{{route('services.pc-repair')}}">Computer Repair</a></li>
						</ul>
						<div class="social-links">
							<ul>
								<li>
									<a class="icon icon-facebook" href="#"></a>
								</li>
								<li>
									<a class="icon icon-twitter" href="#"></a>
								</li>
								<li>
									<a class="icon icon-google-plus" href="#"></a>
								</li>
							</ul>
						</div>
						<div class="footer-phone">
							<i class="icon icon-phone-receiver"></i>Call Us to Our Office <span class="number">+91 98800 37944 / 88804 70007 </span>
						</div>
						<div class="row footer-columns">
							<div class="col-lg-2 visible-lg"></div>
							<div class="col-md-4 col-lg-3">
								<div class="contact-info"><i class="icon icon-placeholder-for-map"></i>#528, Shop No. 1, 1st Floor, Kempamma Building, Nagavara, Banglore 560 045</div>
							</div>
							<div class="col-md-4 col-lg-3">
								<div class="contact-info"><i class="icon icon-clock"></i>Mon-Sat: 10:00am -8:00pm
									<br> Sun: Holiday</div>
							</div>
							<div class="col-lg-2 visible-lg"></div>
							<div class="col-md-4 col-lg-3">
								<ul class="footer-links">
									<li><a href="{{route('terms-and-conditions')}}">Terms and Conditions</a></li>
                                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="copyright">© 2022 Bethel Computech. All Rights Reserved. Design and Developed by <a href="https://shanthaswebz.com" target="_blank" style="color:#9f9f9f; text-decoration: none;">Shanthas Webz</a>.</div>
			</div>
		</div>
	</div>
	<!-- //Footer -->
	<!-- External JavaScripts -->
	<script src="{{ asset('assets/js/jquery.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/slick.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/slider-effect.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/moment.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/jquery.form.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/jquery.validate.min.js')}}"></script>

	<!-- Custom JavaScripts -->
	<script src="{{ asset('assets/js/custom.js')}}"></script>

</body>

</html>