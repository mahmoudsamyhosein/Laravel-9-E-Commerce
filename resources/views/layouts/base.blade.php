<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>مصري شوب @yield('title','| الرئيسية')</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')  }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"
		integrity="sha512-cOGz9gyEibwgs1MVDCcfmQv6mPyUkfvrV9TsRbTuOA12SQnLzBROihf6/jK57u0YxzlxosBFunSt4V75K6azMw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"
		integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	@livewireStyles
</head>
<body class="home-page home-01 " >
	<style>
        .col-md-4{
                float:right;
            }
        th{
            text-align: right; 

        }
        .wrap-footer-content .wrap-function-info .fc-info-item i {
            width: 7%;
            }
        .fa-truck:before{
            margin-left: 25px;
        }
        .fa-recycle:before{
             margin-left: 50px;
        }
        .fa-credit-card-alt:before{
            margin-left: 50px;
        }
        .fa-life-ring:before{
            margin-left: 40px;
        }

		.wrap-show-advance-info-box .title-box{
			background-color:#FE9900 ;
		}
		.wrap-footer-content .wrap-function-info{
			background: #FE9900 ;
		}
		.wrap-newletter-footer .btn-submit{
			background: #FE9900 ;
		}
		header.fill-color .main-info-area .right-section .wrap-icon-section.minicart .index{
			background-color: #FE9900;
		}
		li.menu-item .nav-label.sale-label{
			background:  #FE9900;
		}
		li.menu-item .nav-label.sale-label::before{
			border-top-color:  #FE9900;
			border-left-color:  #FE9900;
		}
		.wrap-banner.banner-style-3 .sub-title::first-letter{
			color:  #FE9900;
		}
		.wrap-main-slide .slide-1 .sale-info .price{
			color: #FE9900;
			
		}
		.wrap-main-slide .slide-2 .f-title{
			color: #FE9900;
		}
		.wrap-main-slide .slide-3 .sale-info .price{
			color: #FE9900;
		}
		.wrap-show-advance-info-box .title-box{

			background-color: #FE9900;

		}
		.wrap-main-slide .active .slide-1 .f-title{
			margin-bottom: 10px;
		}
		.product .product-thumnail .group-flash .flash-item.sale-label::before{
			border-top-color: #FE9900;
			border-left-color: #FE9900;
		}

		.wrap-product-detail .detail-info .wrap-price ins>p,
		.product .product-info .wrap-price ins>p,
		.product-style-2 .product-info .wrap-price ins>p{
			color: #FE9900;

		}
		.ui-slider-horizontal .ui-slider-handle {

			background-color: #FE9900;
		}
		.ui-slider-horizontal .ui-slider-range {

			background: #FE9900;
		}
		.product-list-style .product-attribute li .attr-red-color{
			background: #FE9900;
		}
		.product-list-style .advance-info .wrap-price ins>p{
			color: #FE9900;

		}
		.wrap-contacts .contact-box label>span{
			color: #FE9900;

		}
		.wrap-iten-in-cart .products-cart .delete a.btn:hover i{
			color: #FE9900;
		}
		.wrap-product-detail .detail-info .wrap-price ins>p{
			color: #FE9900;

		}
		.wrap-product-detail .detail-info .stock-info.in-stock b{
			color: #FE9900;
		}
		.wrap-address-billing .row-in-form label span{
			color: #FE9900;
		}
		.wrap-footer-item .wrap-hotline-footer .phone-number,
		.topbar-menu-area .topbar-menu .label-before.fa-mobile{
			color: #FE9900 !important;
		}
		.btn-submit{
			color: #FE9900;
		}
		.wrap-main-slide .slide-1 .btn-link{
			background: #FE9900;
		}
		
		.product .product-thumnail .group-flash .flash-item.sale-label {
    	background-color: #FE9900;
    	margin-right: 8px;
		}
		.wrap-footer-content .wrap-function-info .fc-info-item {
    	border-color: #FE9900 !important;
		}
		.center-section .wrap-search-form button{
			background: #FE9900;
		}
		.center-section .wrap-search-form {
			border-color: #FE9900;
		}
		.wrap-main-slide .slide-1 .btn-link{
			background: #FE9900;

		}
		.summary .checkout-info .btn-checkout{
			background: #FE9900;
		}
		.main-info-area .right-section .wrap-icon-section.minicart .index {
			background: #FE9900;
		}
		.primary .menu-item.home-icon{
			background: #FE9900;
		}
		.product-style-3 a.add-to-cart:hover {
			border-color: #FE9900 !important;
		}
		.product-style-3 a.add-to-cart:hover{
			background: #FE9900;
		}
		.wrap-contacts .contact-box input[type="submit"]{
			background: #FE9900;
		}
		.wrap-icon-box .icon-box-item i{
			background: #FE9900;
		}
		.wrap-login-item .form-item .btn{
			background: #FE9900;
		}
		.wrap-login-item .form-item input[type="checkbox"] + span::after{
			color: #FE9900;
		}
		.product .product-info .product-name:hover span{
			color: #FE9900;
		}
		.product-widget-style .thumbnnail a:hover img{
			border-color: #FE9900;
		}
		.wrap-product-detail .advance-info .tab-control a.active{
			border-color: #FE9900;
		}
		.wrap-product-detail .advance-info .tab-control a.active{
			background: #FE9900;
		}
		
		.wrap-product-detail .detail-info .quantity-input input{
			color: #FE9900;
		}
		.wrap-product-detail .detail-info .wrap-butons .add-to-cart:hover{
			background: #FE9900;
		}
		.wrap-product-detail .detail-info .wrap-butons .add-to-cart:hover{
			border-color: #FE9900;
		}
		.detail-media .flex-control-nav .owl-nav button:hover{
			background: #FE9900 !important;
		}
		.wrap-product-detail .detail-info .quantity-input .btn:hover{
			background: #FE9900 !important;
			border-color: #FE9900;
		}
		.summary-item .btn{
			background: #FE9900;
		}
		.choose-payment-methods .payment-method input[type=radio]:checked + span::before{
			background: #FE9900;
			border-color: #FE9900;
		}
		.topbar-menu-area .topbar-menu ul li a:hover{
			color: #FE9900;
		}
		.wrap-footer-item .social-network ul li a:hover{
			background: #FE9900;
		}
		.wrap-vertical-nav li a:hover{
			color: #FE9900;
		}
		.back-link-box .list-back-link li a:hover{
			color: #FE9900;
		}
		.summary .checkout-info .link-to-shop:hover{
			color: #FE9900;
		}
		.summary .update-clear .btn{
			margin-right: 210px;
		}
		.summary .checkout-info .link-to-shop{
			margin-right: 520px;
		}
		.btn-primary {
		
		background-color: #FE9900;
		border-color: #FE9900;
		}
		.btn-primary:hover{
			background: #333333;
			border-color: #333333;
		}
		.btn-info{
			background-color: #FE9900;
			border-color: #FE9900;
		}
		.btn-info:hover{
			background: #333333;
			border-color: #333333;
		}
		.wrap-login-item .form-item .link-function:hover{
			color: #FE9900 !important;
		}
		.widget a:hover{
			color: #FE9900 !important;
		}
		.wrap-breadcrumb ul a:hover{
			color: #FE9900 ;
		}
		.input, button, select, textarea{
			background: #FE9900;
			margin-left:10px;
			margin-top: 2px;
			border-width: 1px;
			border-color: #FE9900;
			margin-right: 5px;
			color: #ffffff;
		}
		.wrap-shop-control{
			background-color: #FE9900;
		}
		.center-section .wrap-search-form button{
			
			margin-left:0;
			margin-top: 0;
			border-width: 0;
			margin-right: 363;
			border-color:#FE9900;
			
		}
		.center-section .wrap-search-form .wrap-list-cate .list-cate li:not(.level-0):hover{
			color: #FE9900 ;
		}
		.wrap-list-cate{
			margin-left: 10px;

		}
		.center-section .wrap-search-form .wrap-list-cate .list-cate{
			text-align: right;
		}
		.center-section .wrap-search-form .wrap-list-cate .link-control{
			color: #FE9900;
		}
		a.mercado-next-panel:before{
			display: none;
		}
		.wrap-newletter-footer .btn-submit{
			margin-left:0;
			margin-top: 0;
			border-width: 0;
			margin-right: 363;
			border-color:#FE9900;
		}
		.btn-success:hover{
			
			background: #333333;
			border-color: #333333;	
		}
		.btn-success{
			background:#FE9900;
			border-color:#FE9900;
		}
		.panel-default>.panel-heading {
			color: #FE9900;
			background-color: #333333;
			border-color: #FE9900;
		}
		.panel-default{
			border-color: #FE9900;
			border-width: 1px;
		}
		.fa-edit:before, .fa-pencil-square-o:before{
			color: #FE9900;
		}
		.wrap-nav.horizontal-nav .link-term:hover{
			color: #FE9900;
		}
		.btn-submitx{
			color: #ffffff;
			background: #FE9900;
		}
		.text-danger{
			color: crimson;
		}
		.wrap-footer-content .wrap-function-info .fc-info-item .wrap-left-info .fc-desc {
			color: #ffffff !important;
			
		}
		.alert-success{
			background-color: #FE9900;
			border-color:#FE9900;
			color: #ffffff;
		}
		.flex-control-thumbs img.flex-active{
			background:#FE9900;
		}
		.wrap-contacts .contact-box textarea{
			background: #ffffff;
		}
		.wrap-iten-in-cart .products-cart .product-name a:hover{
			color:#FE9900
		}
		.wrap-iten-in-cart .products-cart .product-name a:hover{
			color: #FE9900;
		}
		.flex-control-thumbs img.flex-active{
			border-color:#FE9900;
		}
		#review_form_wrapper #review_form .comment-form textarea[name=comment] {
			background:#ffffff;
			color: black;
		}
		#review_form_wrapper #review_form .comment-form p.form-submit input[type=submit]{
			background: #FE9900;

		}
		.noUi-connect {
			background: #FE9900;
		}.text-info{
			color: #FE9900;
		}
		.fa-caret-right:before{
			margin-left: 6px;
			
		}
    </style>	
	<!-- قائمة الموبايل -->
	<div class="mercado-clone-wrap" dir="rtl">
		<div class="mercado-panels-actions-wrap">
			<a class="mercado-close-btn mercado-close-panels" href="#">x</a>
		</div>
		<div class="mercado-panels">
			{{----}}
		</div>
	</div>
	<!-- قائمة الموبايل -->
	<!--الهيدر-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								{{-- تسجيل الدخول للمدير والمستخدم العادي --}}
								@if(Route::has('login'))
								@auth{{-- في حال كان المستخدم مدير أو بخلاف ذلك --}}
								@if(Auth::user()->utype === "ADM" )
								<li class="menu-item menu-item-has-children parent" dir="rtl" style="text-align: right">
									{{-- عرض أسم المستخدم --}}
									<a title="My Account" href="#">{{__('mshmk.My_Account')}}({{Auth::user()->name}})<i
											class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency"  >
										<li class="menu-item">
											<a title="{{__('mshmk.Dashboard')}}"
												href="{{ route('admin.dashboard')}}">{{__('mshmk.Dashboard')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.All_Products')}}"
												href="{{ route('admin.products')}}">{{__('mshmk.All_Products')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Orders')}}" href="{{ route('admin.orders')}}">
												{{__('mshmk.Orders')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Categories')}}"
												href="{{ route('admin.categories')}}">{{__('mshmk.Categories')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.attributes')}}"
												href="{{ route('admin.attributes')}}">{{__('mshmk.attributes')}}</a>
										</li>
										{{-- <li class="menu-item">
											<a title="{{__('mshmk.coupons')}}" href="{{ route('admin.coupons')}}">
												{{__('mshmk.coupons')}}</a>
										</li> --}}
										<li class="menu-item">
											<a title="{{__('mshmk.Manage_Home_Categories')}}"
												href="{{ route('admin.home-categories')}}">{{__('mshmk.Manage_Home_Categories')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Manage_Home_Slider')}}"
												href="{{ route('admin.homeslider')}}">{{__('mshmk.Manage_Home_Slider')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Sale_Setting')}}"
												href="{{ route('admin.sale')}}">{{__('mshmk.Sale_Setting')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Contact_Messages')}}" href="{{ route('admin.contact-us')}}">
												{{__('mshmk.Contact_Messages')}}</a>
										</li>
										
										<li class="menu-item">
											<a title="{{__('mshmk.Settings')}}" href="{{ route('admin.settings')}}">
												{{__('mshmk.Settings')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Logout')}}" href=" {{ route('logout') }}"
												onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('mshmk.Logout')}}</a>
										</li>
										<form id="logout-form" action=" {{ route('logout') }}" method="post">
											@csrf
										</form>
									</ul>
								</li>
								@else
								<li class="menu-item menu-item-has-children parent" dir="rtl" style="text-align: right">
									{{-- عرض أسم المستخدم --}}
									<a title="{{__('mshmk.My_Account')}}" href="#">{{__('mshmk.My_Account')}}({{Auth::user()->name}})<i
											class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency">
										<li class="menu-item">
											<a title="{{__('mshmk.Dashboard')}}"
												href="{{ route('user.dashboard')}}">{{__('mshmk.Dashboard')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Orders')}}"
												href="{{ route('user.orders')}}">{{__('mshmk.Orders')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.profile')}}"
												href="{{ route('user.profile')}}">{{__('mshmk.profile')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.change_password')}}"
												href="{{route('user.changepassword')}}">{{__('mshmk.change_password')}}</a>
										</li>
										<li class="menu-item">
											<a title="{{__('mshmk.Logout')}}" href="{{ route('logout') }}"
												onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('mshmk.Logout')}}</a>
										</li>
										<form id="logout-form" action="{{ route('logout') }}" method="post">
											@csrf
										</form>
									</ul>
								</li>
								@endif
								@else{{-- اذا لم يكن مخول اظهر روابط تسجيل الدخول والتسجيل --}}
								<li class="menu-item"  ><a  title="{{__('mshmk.Login')}}"
										href="{{ route('login') }}">{{__('mshmk.Login')}}</a>
								</li>
								<li class="menu-item" style="margin-right: 10px;" ><a title="{{__('mshmk.Register')}}"
									href="{{ route('register') }}">{{__('mshmk.Register')}}</a>
								</li>
								@endif
								@endif
							</ul>
						</div>
						{{-- <div class="topbar-menu right-menu" >
							<ul >
								<li class="menu-item lang-menu menu-item-has-children parent" dir="rtl" style="text-align: right;" >
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ Config::get('languages')[App::getLocale()]['display'] }}
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										@foreach (Config::get('languages') as $lang => $language)
										@if ($lang != App::getLocale() )
										<a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"  >
											{{$language['display']}}</a>
										@endif
										@endforeach
									</div>
								</li>
							</ul>
						</div> --}}
					</div>
				</div>
				<div class="container" >
					<div class="mid-section main-info-area" dir="rtl">
						<div class="wrap-logo-top left-section " >
							<a href="/" class="link-to-home"><img src="{{asset('assets/images/logo/logo-top-1.png')}}"
									alt="mercado"></a>
						</div>
						@livewire('header-search-component')
						<div class="wrap-icon right-section" >
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
							@livewire('wish-list-count-component')
							@livewire('cart-count-component')
							
						</div>
					</div>
				</div>
				<div class="nav-section header-sticky" >
					<div class="primary-nav-section" >
						<div class="container">
							<ul class="nav primary clone-main-menu " id="mercado_main" data-menuname="{{__('mshmk.MAIN_MENU')}}">
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title">
										<i class="fa fa-home" aria-hidden="true"></i>
									</a>	
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">{{__('mshmk.Shop')}}</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">{{__('mshmk.Cart')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{route('product.checkout')}}"
										class="link-term mercado-item-title">{{__('mshmk.Checkout')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('contact-us')}}"
										class="link-term mercado-item-title">{{__('mshmk.Contact_Us')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('aboutus') }}"
										class="link-term mercado-item-title">{{__('mshmk.About_Us')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('terms')}}"
										class="link-term mercado-item-title">{{__('mshmk.terms')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('privacy-policy')}}"
										class="link-term mercado-item-title">{{__('mshmk.privacy-policy')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('return-policy')}}"
										class="link-term mercado-item-title">{{__('mshmk.return-policy')}}</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('faq')}}"
										class="link-term mercado-item-title">{{__('mshmk.faq')}}</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--الهيدر-->
	{{ $slot }}
	<!--الفوتور-->
	@livewire('footer-component')
	<!--الفوتور-->
	<!--جافا سكربت-->
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
		integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"
		integrity="sha512-PDFb+YK2iaqtG4XelS5upP1/tFSmLUVJ/BVL8ToREQjsuXC5tyqEfAQV7Ca7s8b7RLHptOmTJak9jxlA2H9xQA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"
		integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.tiny.cloud/1/b7vhlj1xgbj9guv1kjrx6iyin4zov3kr6x7aguzir6ds7v7j/tinymce/5/tinymce.min.js"
		referrerpolicy="origin"></script>
	@stack('scripts')
	<!--جافا سكربت-->
	@livewireScripts
</body>
</html>