<x-base-layout>
    	<!--main area-->
	<main id="main" class="main-site left-sidebar" dir="rtl">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Login')}}</span></li>
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
								<form name="frm-login" action="{{ route('login') }}" method="POST">
                                    @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">{{__('mshmk.Log_in_to_your_account')}}</h3>										
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-uname">{{__('mshmk.Email_Address')}} <span style="color: red">*</span></label>
										<input type="email" id="frm-login-uname" name="email" placeholder="{{__('mshmk.Enter_your_email_address')}}" :value="old('email')" required autofocus>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">{{__('mshmk.Password')}}<span style="color: red">*</span></label>
										<input type="password" id="frm-login-pass" name="password" placeholder="{{__('mshmk.Password')}}" required autocomplete="current-password">
									</fieldset>
									
									<fieldset class="wrap-input">
										<label class="remember-field">
											<input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>{{__('mshmk.Remember_me')}}</span>
										</label>
										<a class="link-function left-position" href="{{ route('password.request') }}" title="{{__('mshmk.Forgotten_password?')}}">{{__('mshmk.Forgotten_password?')}}</a>
									</fieldset>
									<input type="submit" class="btn btn-submit" value="{{__('mshmk.Login')}}" name="submit">
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




