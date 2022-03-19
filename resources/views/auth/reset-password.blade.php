<x-base-layout>
    <!--main area-->
<main id="main" class="main-site left-sidebar" dir="rtl">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
                <li class="item-link"><span>{{__('mshmk.Reset_Password')}}</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">						
                        <div class="login-form form-item form-stl">
                            {{-- رسالة الخطأ  --}}
                            <x-jet-validation-errors class="mb-4" />
                            {{-- رسالة الخطأ  --}}
                            <form name="frm-login" action="{{ route('password.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{__('mshmk.Reset_Password')}}</h3>										
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">{{__('mshmk.Email_Address')}}</label>
                                    <input type="email" id="frm-login-uname" name="email" placeholder="{{__('mshmk.Enter_your_email_address')}}" value="{{$request->email}}" required autofocus>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="password">{{__('mshmk.Password')}} <span style="color: red">*</span></label>
                                    <input type="password" id="password" name="password" placeholder="{{__('mshmk.Password')}}" required autocomplete="new-password" autofocus>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="password_confirmation">{{__('mshmk.Confirm_Password')}} <span style="color: red">*</span></label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="{{__('mshmk.Confirm_Password')}}" required autocomplete="new-password" autofocus >
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="{{__('mshmk.Reset_Password')}}" name="submit">
                            </form>
                        </div>												
                    </div>
                </div><!--end main products area-->		
            </div>
        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->
</x-base-layout>


