<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')  }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css" integrity="sha512-cOGz9gyEibwgs1MVDCcfmQv6mPyUkfvrV9TsRbTuOA12SQnLzBROihf6/jK57u0YxzlxosBFunSt4V75K6azMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body class="home-page home-01 " >

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="{{__('mshmk.Hotline')}}: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>{{__('mshmk.Hotline')}}: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									@foreach (Config::get('languages') as $lang => $language)
										@if ($lang != App::getLocale())
												<a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
										@endif
									@endforeach
									</div>
								</li>

								{{-- <li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li> --}}
								{{-- تسجيل الدخول للمدير والمستخدم العادي --}}
								@if(Route::has('login'))
									@auth{{-- 	في حال كان المستخدم مدير أو بخلاف ذلك  --}}
												@if(Auth::user()->utype === "ADM" )
														<li class="menu-item menu-item-has-children parent" >
																									{{-- عرض أسم المستخدم --}}
															<a title="My Account" href="#">{{__('mshmk.My_Account')}}({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
															<ul class="submenu curency" >
																<li class="menu-item" >
																	<a title="Dashboard" href="{{ route('admin.dashboard')}}">{{__('mshmk.Dashboard')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="Categories"  href="{{ route('admin.categories')}}">{{__('mshmk.Categories')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="Products"  href="{{ route('admin.products')}}">{{__('mshmk.All_Products')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="Manage Home Slider"  href="{{ route('admin.homeslider')}}">{{__('mshmk.Manage_Home_Slider')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="Manage Home Categories"  href="{{ route('admin.home-categories')}}">{{__('mshmk.Manage_Home_Categories')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="Sale Setting"  href="{{ route('admin.sale')}}">{{__('mshmk.Sale_Setting')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="Contact Messages"  href="{{ route('admin.contact-us')}}"> {{__('mshmk.Contact_Messages')}}</a>
																</li>
																<li class="menu-item">
																	<a  title="settings"  href="{{ route('admin.settings')}}"> {{__('mshmk.Settings')}}</a>
																</li>
																<li class="menu-item">
																	<a href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('mshmk.Logout')}}</a>
																</li>
																<form  id="logout-form" action=" {{ route('logout') }}" method="post">
																	@csrf
																</form>
															</ul>
														</li>
												@else
														<li class="menu-item menu-item-has-children parent" >
																									{{-- عرض أسم المستخدم --}}
															<a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
															<ul class="submenu curency" >
																<li class="menu-item" >
																	<a title="Dashboard" href="{{ route('user.dashboard')}}">{{__('mshmk.Dashboard')}}</a>
																</li>
																<li class="menu-item">
																	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('mshmk.Logout')}}</a>
																</li>
																<form  id="logout-form" action="{{ route('logout') }}" method="post">
																	@csrf
																</form>
															</ul>
														</li>
												@endif
									@else{{--  اذا لم يكن مخول اظهر روابط تسجيل الدخول والتسجيل --}}
										<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">{{__('mshmk.Login')}}</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">{{__('mshmk.Register')}}</a></li>
									@endif
								@endif
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" class="link-to-home"><img src="{{asset('assets/images/logo-top-1.png')}}" alt="mercado"></a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							@livewire('wish-list-count-component')
							
							@livewire('cart-count-component')
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					{{-- <div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div> --}}

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.html" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">{{__('mshmk.About_Us')}}</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">{{__('mshmk.Shop')}}</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">{{__('mshmk.Cart')}}</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">{{__('mshmk.Checkout')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('contact-us')}}" class="link-term mercado-item-title">{{__('mshmk.Contact_Us')}}</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

    {{ $slot }}

	@livewire('footer-component')
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script> --}}
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js" integrity="sha512-PDFb+YK2iaqtG4XelS5upP1/tFSmLUVJ/BVL8ToREQjsuXC5tyqEfAQV7Ca7s8b7RLHptOmTJak9jxlA2H9xQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tiny.cloud/1/b7vhlj1xgbj9guv1kjrx6iyin4zov3kr6x7aguzir6ds7v7j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>	@livewireScripts
	@stack('scripts')
	@livewireScripts
</body>
</html>