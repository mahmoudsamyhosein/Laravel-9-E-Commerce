<div dir="rtl" style="text-align: right">
	<!--main area-->
	<main id="main" class="main-site">
		<title>@section('title',' سياسة الخصوصية |')</title>

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.privacy-policy')}}</span></li>
				</ul>
			</div>
		</div>
		
		<div class="container pb-60">
			<div class="row">
				<div class="col-md-12">
					<h3>{{__('mshmk.privacy-policy')}}</h3>
					{{$setting->about_privacy_body}}
				</div>
			</div>
		</div><!--end container-->

	</main>
	<!--main area-->
</div>
