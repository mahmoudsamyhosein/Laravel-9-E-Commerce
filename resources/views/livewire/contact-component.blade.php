<div dir="rtl" style="text-align:right;">
<!--main area-->
	<main id="main" class="main-site left-sidebar" >
		<title>@section('title',' تواصل معنا |')</title>
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Contact_Us')}}</span></li>
				</ul>
			</div>
			<div class="row" >
				<div class="main-content-area">
					<div class="wrap-contacts ">
						{{-- معلومات وخريطة المتجر --}}
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-info">
								<div class="wrap-map">
									<iframe src="{{ $setting->map }}" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>
								<h2 class="box-title">{{__('mshmk.Contact_Detail')}}</h2>
								<div class="wrap-icon-box">
									<div class="icon-box-item">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<div class="right-info">
											<b>{{__('mshmk.Email2')}}</b>
											<p>{{ $setting->email}}</p>
										</div>
									</div>
									<div class="icon-box-item">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div class="right-info">
											<b>{{__('mshmk.Number_Phone')}}</b>
											<p>{{ $setting->phone}}</p>
										</div>
									</div>
									<div class="icon-box-item">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="right-info">
											<b>{{__('mshmk.Mail_Office')}}</b>
											<p>{{ $setting->address}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						{{-- معلومات وخريطة المتجر --}}
						{{-- فورم التواصل --}}
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 ">
							<div class="contact-box contact-form">
								<h2 class="box-title">{{__('mshmk.Leave_a_Message')}}</h2>
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                                @endif
								<form  name="frm-contact" wire:submit.prevent='sendmessage'>
									@csrf
									<label for="name">{{__('mshmk.Name')}}<span>*</span></label>
									<input type="text" name="name"  id="name"  wire:model='name'>
                                    @error('name') <p class="text-danger">{{ $message }}</p> @enderror
									<label for="email">{{__('mshmk.Email')}}<span>*</span></label>
									<input type="text" name="email" id="email"  wire:model="email" >
                                    @error('email') <p class="text-danger">{{ $message }}</p>@enderror
									<label for="phone">{{__('mshmk.Number_Phone')}}</label>
									<input type="text" name="phone" id="phone"  wire:model="phone">
                                    @error('phone') <p class="text-danger">{{ $message }}</p>@enderror
									<label for="comment">{{__('mshmk.Comment')}}</label>
									<textarea name="comment"  id="comment" wire:model="comment"></textarea>
                                    @error('comment') <p class="text-danger">{{ $message }}</p>@enderror
									<input type="submit"  value="{{__('mshmk.Submit')}}" >
								</form>
							</div>
						</div>
						{{-- فورم التواصل --}}
					</div>
				</div><!--end main products area-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
<!--main area-->
</div>