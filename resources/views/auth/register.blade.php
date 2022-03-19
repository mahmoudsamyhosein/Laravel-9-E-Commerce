<x-base-layout>
	<!--main area-->
	<main id="main" class="main-site left-sidebar" dir="rtl">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Register')}}</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
                                <x-jet-validation-errors class="mb-4" />
								<form class="form-stl" action="{{ route('register') }}" name="frm-login" method="post" >
                                    @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">{{__('mshmk.Create_an_account')}}</h3>
										<h4 class="form-subtitle">{{__('mshmk.Personal_infomation')}}</h4>
									</fieldset>									
									<fieldset class="wrap-input">
										<label for="frm-reg-lname">{{__('mshmk.Name')}}<span style="color: red">*</span></label>
										<input type="text" id="frm-reg-lname" name="name" placeholder="{{__('mshmk.Your_Name')}}" required autofocus autocomplete="name">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">{{__('mshmk.Email_Address')}}<span style="color: red">*</span></label>
										<input type="email" id="frm-reg-email" name="email" placeholder="{{__('mshmk.Enter_your_email_address')}}" required autofocus autocomplete="email">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-pass">{{__('mshmk.Password')}}<span style="color: red">*</span></label>
										<input type="password" id="frm-reg-pass" name="password" placeholder="{{__('mshmk.Password')}}" required autocomplete="new-password" autofocus>
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-cfpass">{{__('mshmk.Confirm_Password')}} <span style="color: red">*</span>  </label>
										<input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="{{__('mshmk.Confirm_Password')}}" required autocomplete="new-password" autofocus >
									</fieldset>
									<input type="submit" class="btn btn-sign" value="{{__('mshmk.Register')}}" name="register">
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
