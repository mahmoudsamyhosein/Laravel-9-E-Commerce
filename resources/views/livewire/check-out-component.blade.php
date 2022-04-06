<div>
	<!--main area-->
	<main id="main" class="main-site" dir="rtl" style="text-align: right">
		<title>@section('title',' أتمام الدفع  |')</title>
		<style>
			.summary-item .row-in-form input[type="password"], .summary-item .row-in-form input[type="text"], .summary-item .row-in-form input[type="tel"] {
				font-size: 13px;
				line-height: 19px;
				display: inline-block;
				height: 43px;
				padding: 2px 20px;
				max-width: 300px;
				width: 100%;
				border: 1px solid #e6e6e6;
			}
		</style>
		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Check_out')}}</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<form wire:submit.prevent='placeorder' onsubmit="$('#processing').show();" >
				@csrf
					<div class="row">
						<div class="col-md-12">
{{------------------------------------------- بيانات الدفع والطلب  ---}}
							<div class="wrap-address-billing">
								<h3 class="box-title">{{__('mshmk.Billing_Address')}}</h3>
								<div class="Billing_Address">
									<p class="row-in-form">
										<label for="fname">{{__('mshmk.first_name')}}<span>*</span></label>
										<input  type="text" name="fname"  placeholder="{{__('mshmk.first_name')}}" wire:model='firstname'>
										@error('firstname')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="lname">{{__('mshmk.last_name')}}<span>*</span></label>
										<input  type="text" name="lname"  placeholder="{{__('mshmk.last_name')}}" wire:model='lastname'>
										@error('lastname')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="email">{{__('mshmk.Email_Addreess:')}}</label>
										<input  type="email" name="email"  placeholder="{{__('mshmk.Type_your_email')}}" wire:model='email'>
										@error('email')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="phone">{{__('mshmk.Phone_number')}}<span>*</span></label>
										<input  type="text" name="phone" placeholder="{{__('mshmk.10_digits_format')}}" wire:model='mobile'>
										@error('mobile')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="add">{{__('mshmk.line1')}}<span style="color: red">*</span></label>
										<input  type="text" name="line1"  placeholder="{{__('mshmk.Street_at_apartment_number')}}" wire:model='line1'>
										@error('line1')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="add">{{__('mshmk.line2')}}</label>
										<input  type="text" name="line2"  placeholder="{{__('mshmk.line2_description')}}" wire:model='line2'>
										@error('line2')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="country">{{__('mshmk.Country')}}<span>*</span></label>
										<input  type="text" name="country"  placeholder="{{__('mshmk.Egypt')}}" wire:model='country'>
										@error('country')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="city">{{__('mshmk.Town/City')}}<span>*</span></label>
										<input  type="text" name="city" placeholder="{{__('mshmk.City_name')}}" wire:model='city'>
										@error('city')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="province">{{__('mshmk.province')}}<span>*</span></label>
										<input  type="text" name="province" placeholder="{{__('mshmk.province')}}" wire:model='province'>
										@error('province')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="zip-code">{{__('mshmk.Postcode/ZIP:')}}</label>
										<input  type="text" name="zip-code" placeholder="{{__('mshmk.Your_postal_code')}}" wire:model='zipcode'>
										@error('zipcode')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form fill-wife">
										
										<label class="checkbox-field">
											<input name="different-add" id="different-add" value="1" type="checkbox" wire:model='is_shipping_different'>
											<span>{{__('mshmk.Ship_to_a_different_address?')}}</span>
										</label>
									</p>
								</div>		
						</div>
{{------------------------------------------- بيانات الدفع والطلب  ---}}

{{-------------------------------------------الشحن الي عنوان مختلف ---}}
						@if($is_shipping_different)
						<div class="col-md-12">
							<div class="wrap-address-billing">
								<h3 class="box-title">{{__('mshmk.Shipping_Address')}}</h3>
								<div class="Billing_Address">
									<p class="row-in-form">
										<label for="fname">{{__('mshmk.first_name')}}<span>*</span></label>
										<input  type="text" name="fname"  placeholder="{{__('mshmk.first_name')}}" wire:model='s_firstname'>
										@error('s_firstname')<span class="text-danger">{{$message}}</span>@enderror

									</p>
									<p class="row-in-form">
										<label for="lname">{{__('mshmk.last_name')}}<span>*</span></label>
										<input  type="text" name="lname"  placeholder="{{__('mshmk.last_name')}}" wire:model='s_lastname'>
										@error('s_lastname')<span class="text-danger">{{$message}}</span>@enderror

									</p>
									<p class="row-in-form">
										<label for="email">{{__('mshmk.Email_Addreess:')}}</label>
										<input  type="email" name="email"  placeholder="{{__('mshmk.Type_your_email')}}" wire:model='s_email'>
										@error('s_email')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="phone">{{__('mshmk.Phone_number')}}<span>*</span></label>
										<input  type="text" name="phone" placeholder="{{__('mshmk.10_digits_format')}}" wire:model='s_mobile'>
										@error('s_mobile')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="add">{{__('mshmk.line1')}}<span style="color: red">*</span></label>
										<input  type="text" name="line1"  placeholder="{{__('mshmk.Street_at_apartment_number')}}" wire:model='s_line1'>
										@error('s_line1')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="add">{{__('mshmk.line2')}}</label>
										<input  type="text" name="line2"  placeholder="{{__('mshmk.line2_description')}}" wire:model='s_line2'>
										@error('s_line2')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="country">{{__('mshmk.Country')}}<span>*</span></label>
										<input  type="text" name="country"  placeholder="{{__('mshmk.Egypt')}}" wire:model='s_country'>
										@error('s_country')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="city">{{__('mshmk.Town/City')}}<span>*</span></label>
										<input  type="text" name="city" placeholder="{{__('mshmk.City_name')}}" wire:model='s_city'>
										@error('s_city')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="province">{{__('mshmk.province')}}<span>*</span></label>
										<input  type="text" name="province" placeholder="{{__('mshmk.province')}}" wire:model='s_province'>
										@error('s_province')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="zip-code">{{__('mshmk.Postcode/ZIP:')}}</label>
										<input  type="text" name="zip-code" placeholder="{{__('mshmk.Your_postal_code')}}" wire:model='s_zipcode'>
										@error('s_zipcode')<span class="text-danger">{{$message}}</span>@enderror
									</p>
								</div>		
						</div>
						@endif
					</div>
{{-------------------------------------------الشحن الي عنوان مختلف ---}}

{{-------------------------------------------طريقة الدقع ---}}
					<div class="summary summary-checkout">
						<div class="summary-item payment-method">
							<h4 class="title-box">{{__('mshmk.Payment_Method')}}</h4>
							@if ($paymentmode == 'card')								
								<div class="wrap-address-billing">
									@if (Session::has('stripe_error'))
										<div class="alert alert-danger" role="alert">{{Session::get('stripe_error')}}</div>
										
									@endif
									<p class="row-in-form">
										<label for="card_no">{{__('mshmk.Card_Number')}}</label>
										<input  type="text" name="card_no" placeholder="{{__('mshmk.Card_Number')}}" wire:model='card_no'>
										@error('card_no')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="exp-month">{{__('mshmk.exp-month')}}</label>
										<input  type="text" name="exp-month" placeholder="MM" wire:model='exp_month'>
										@error('exp-month')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="exp_year">{{__('mshmk.exp_year')}}</label>
										<input  type="text" name="exp_year" placeholder="YYYY" wire:model='exp_year'>
										@error('exp_year')<span class="text-danger">{{$message}}</span>@enderror
									</p>
									<p class="row-in-form">
										<label for="cvc">{{__('mshmk.cvc')}}</label>
										<input  type="password" name="card_no" placeholder="CVC" wire:model='cvc'>
										@error('cvc')<span class="text-danger">{{$message}}</span>@enderror
									</p>
								</div>
							@endif
							<div class="choose-payment-methods">
								<label class="payment-method">
									<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model='paymentmode'>
									<span> {{__('mshmk.Cash_On_Delivery')}}</span>
									<span class="payment-desc">{{__('mshmk.Cash_On_Delivery_description')}}</span>
								</label>
								<label class="payment-method">
									<input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model='paymentmode'>
									<span>{{__('mshmk.Debit/Credit_card')}}</span>
									<span class="payment-desc">{{__('mshmk.Debit/Credit_card_description')}}</span>
								</label>
							</div>
{{-------------------------------------------طريقة الدقع ---}}

{{-------------------------------------------الأجماليات ---}}
							@if(Session::has('checkout'))
								<p class="summary-info grand-total"><span>{{__('mshmk.Subtotal')}}</span><span class="grand-total-price">{{Session::get('checkout')['subtotal']}} {{$setting->currency}}</span></p>
								<p class="summary-info grand-total"><span>{{__('mshmk.Grand_Total')}}</span><span class="grand-total-price">{{Session::get('checkout')['total']}} {{$setting->currency}}</span></p>
							@endif
{{-------------------------------------------الأجماليات ---}}

{{-------------------------------------------رسالة معالجة الطلب  ---}}
							@if ($errors->isEmpty())
								<div wire:ignore id="processing" style="font-size:22px; margin-bottom:20px;padding-left:37px;display:none;color: #FE9900;">
									<i class="fa fa-spinner fa-pulse fa-fw"></i>
									<span>{{__('mshmk.Processing...')}}</span>
								</div>							
							@endif
{{-------------------------------------------رسالة معالجة الطلب  ---}}

							<button type="submit" class="btn btn-medium">{{__('mshmk.Place_order_now')}}</button>
						</div>

{{------------------------------------------- الشحن ---}}	
						<div class="summary-item shipping-method">
							<h4 class="title-box f-title">{{__('mshmk.Shipping_method')}}</h4>
							<p class="summary-info"><span class="title">{{__('mshmk.Free_shipping')}}</span></p>
							{{-- <p class="summary-info"><span class="title">{{__('mshmk.Flat_Rate')}}</span></p> --}}
							{{-- <p class="summary-info"><span class="title">{{__('mshmk.Fixed_$0')}}</span></p> --}}
						</div>
{{------------------------------------------- الشحن ---}}	
					</div>
				</form>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
</div>