<x-base-layout>
    <!--main area-->
<main id="main" class="main-site left-sidebar" dir="rtl">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
                <li class="item-link"><span>{{__('mshmk.Forget_Password')}}</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                <div class=" main-content-area">
                    <div class="wrap-login-item ">						
                        <div class="login-form form-item form-stl">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                
                            {{-- رسالة الخطأ  --}}
                            <x-jet-validation-errors class="mb-4" />
                            {{-- رسالة الخطأ  --}}
                            <form name="frm-login" action="{{ route('password.email') }}" method="POST">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">{{__('mshmk.Forget_Password')}}</h3>										
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">{{__('mshmk.Email_Address')}} <span style="color: red;">*</span> </label>
                                    <input type="email" id="frm-login-uname" name="email" placeholder="{{__('mshmk.Enter_your_email_address')}}" :value="old('email')" required autofocus>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="{{__('mshmk.Email_Password_Reset_Link')}}" name="submit">
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

