<div dir="rtl" style="text-align:right;">
   	<!--صفحة شكر للمستخدم-->
	<main id="main" class="main-site">
		<title>@section('title',' شكرا لك |')</title>

		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Thank_You')}}</span></li>
				</ul>
			</div>
		</div>
		<div class="container pb-60">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>{{__('mshmk.Thank_you_for_your_order')}}</h2>
                    {{-- <p>{{__('mshmk.A_confirmation_email_was_sent.')}}</p> --}}
                    <a href="/shop" class="btn btn-submit btn-submitx">{{__('mshmk.Continue_Shopping')}}</a>
				</div>
			</div>
		</div><!--end container-->

	</main>
   	<!--صفحة شكر للمستخدم-->
</div>
