<div>
<footer id="footer">
    <div class="wrap-footer-content footer-style-1">
        <!--أيقونات الفوتور-->
        <div class="wrap-function-info">
            <div class="container">
                <ul>
                    <li class="fc-info-item">
                        {{--section_1--}}
                        <div class="wrap-left-info">
                            <h4 class="fc-name">{{$setting->section_1_title}}</h4>
                            <p class="fc-desc">{{$setting->section_1_subtitle}}</p>
                        </div>
                        <i class="{{$setting->section_1_icon}}" aria-hidden="true"></i>
                    </li>
                    <li class="fc-info-item">
                        {{--section_2--}}
                        <div class="wrap-left-info ">
                            <h4 class="fc-name">{{$setting->section_2_title}}</h4>
                            <p class="fc-desc">{{$setting->section_2_subtitle}}</p>
                        </div>
                        <i class="{{$setting->section_2_icon}}" aria-hidden="true"></i>
                    </li>
                    <li class="fc-info-item">
                        {{--section_3--}}
                        <div class="wrap-left-info">
                            <h4 class="fc-name">{{$setting->section_3_title}}</h4>
                            <p class="fc-desc">{{$setting->section_3_subtitle}}</p>
                        </div>
                        <i class="{{$setting->section_3_icon}}" aria-hidden="true"></i>
                    </li>
                    <li class="fc-info-item">
                        {{--section_4--}}
                        <div class="wrap-left-info">
                            <h4 class="fc-name">{{$setting->section_4_title}}</h4>
                            <p class="fc-desc">{{$setting->section_4_subtitle}}</p>
                        </div>
                        <i class="{{$setting->section_4_icon}}" aria-hidden="true" ></i>
                    </li>
                </ul>
            </div>
        </div>
        <!--أيقونات الفوتور-->
        <!--End function info-->
        <div class="main-footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('mshmk.Contact_Details')}}</h3>
                            <div class="item-content">
                                <div class="wrap-contact-detail">
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">{{$setting->address}}</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt">{{$setting->phone}}</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">{{$setting->email}}</p>
                                        </li>											
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('mshmk.Hotline')}}</h3>
                            <div class="item-content">
                                <div class="wrap-hotline-footer">
                                    <b class="phone-number"> {{$setting->phone2}}</b>
                                </div>
                            </div>
                        </div>

                        <div class="wrap-footer-item footer-item-second">
                            <h3 class="item-header ">{{__('mshmk.Sign_up_for_newsletter')}}</h3>
                            <div class="item-content">
                                <div class="wrap-newletter-footer">
                                    <form action="#" class="frm-newletter" id="frm-newletter">
                                        <input type="email" class="input-email"  placeholder="{{__('mshmk.Enter_your_email_address')}}">
                                        <button class="btn-submit">{{__('mshmk.Subscribe')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                        <div class="row">
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">{{__('mshmk.My_Account')}}</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="{{route('user.dashboard')}}" class="link-term">{{__('mshmk.My_Account')}}</a></li>
                                            <li class="menu-item"><a href="{{route('contact-us')}}" class="link-term">{{__('mshmk.Contact_Us')}}</a></li>
                                            <li class="menu-item"><a href="{{route('product.checkout')}}" class="link-term">{{__('mshmk.Check_out')}}</a></li>
                                            <li class="menu-item"><a href="/shop" class="link-term">{{__('mshmk.Shop')}}</a></li>
                                            <li class="menu-item"><a href="{{route('product.wishlist')}}" class="link-term">{{__('mshmk.Wish_list')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-footer-item twin-item">
                                <h3 class="item-header">{{__('mshmk.Infomation')}}</h3>
                                <div class="item-content">
                                    <div class="wrap-vertical-nav">
                                        <ul>
                                            <li class="menu-item"><a href="{{route('aboutus')}}" class="link-term">{{__('mshmk.About_Us')}}</a></li>
                                            <li class="menu-item"><a href="{{route('terms')}}" class="link-term">{{__('mshmk.terms')}}</a></li>
                                            <li class="menu-item"><a href="{{route('faq')}}" class="link-term">{{__('mshmk.faq')}}</a></li>
                                            <li class="menu-item"><a href="{{route('privacy-policy')}}" class="link-term">{{__('mshmk.privacy-policy')}}</a></li>
                                            <li class="menu-item"><a href="{{route('return-policy')}}" class="link-term">{{__('mshmk.return-policy')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('mshmk.Dowload_App')}}</h3>
                            <div class="item-content">
                                <div class="wrap-list-item apps-list">
                                    <ul>
                                        <li><a href="{{$setting->download_app_link_1}}" class="link-to-item" title="our application on apple store"><figure><img src="{{asset('assets/images/brands/apple-store.png')}}" alt="apple store" width="128" height="36"></figure></a></li>
                                        <li><a href="{{$setting->download_app_link_2}}" class="link-to-item" title="our application on google play store"><figure><img src="{{asset('assets/images/brands/google-play-store.png')}}" alt="google play store" width="128" height="36"></figure></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header ">{{__('mshmk.Social_network')}}</h3>
                            <div class="item-content">
                                <div class="wrap-list-item social-network">
                                    <ul>
                                        <li><a href="{{$setting->twiter}}" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$setting->facebook}}" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$setting->pinterest}}" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$setting->instagram}}" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$setting->youtube}}" class="link-to-item" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">{{__('mshmk.We_Using_Safe_Payments:')}}</h3>
                            <div class="item-content">
                                <div class="wrap-list-item wrap-gallery">
                                    <img src="{{asset('assets/images/payment.png')}}" style="max-width: 260px;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="wrap-back-link" dir="rtl">
                <div class="container">
                    <div class="back-link-box">
                        <h3 class="backlink-title text-right">{{__('mshmk.Quick_Links')}}</h3>
                        <div class="back-link-row ">
                            <ul class="list-back-link" >
                                @foreach($categories as $category)
                                    <li><a href="{{ route('product.category' , ['category_slug' => $category->slug ]) }}" class="redirect-back-link" title="mobile">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="coppy-right-box ">
            <div class="container ">
                <div class="coppy-right-item item-right">
                    <div class="wrap-nav horizontal-nav">
                        <ul>
                            {{-- <li class="menu-item"><a href="https://mahmoudsamyhosein.github.io/masry_shop_tech_doc/" class="link-term">{{__('mshmk.tech_doc')}}</a></li> --}}
                            <li class="menu-item"><a href="https://mahmoudsamyhosein.github.io/masry_shop_doc/" class="link-term">{{__('mshmk.doc')}}</a></li>																							
                        </ul>
                    </div>
                </div>
                <div class="coppy-right-item item-left">
                    <a href="https://github.com/mahmoudsamyhosein"><p class="coppy-right-text">{{$setting->copyright}} © {{ now()->year }} </p></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
