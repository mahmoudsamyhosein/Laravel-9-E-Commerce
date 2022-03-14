<x-base-layout>
    <!--main area-->
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Forget Password </span></li>
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
                                    <h3 class="form-title">Forget Password</h3>										
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-login-uname">Email Address:</label>
                                    <input type="email" id="frm-login-uname" name="email" placeholder="Type your email address" :value="old('email')" required autofocus>
                                </fieldset>
                                <input type="submit" class="btn btn-submit" value="Email Password Reset Link" name="submit">
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

