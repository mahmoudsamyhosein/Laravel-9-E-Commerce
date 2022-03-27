<div>
<!--main area-->
	<main id="main" class="main-site" dir="rtl" style="text-align: right">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Cart')}}</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				@if(Cart::instance('cart')->count() > 0)
				<div class="wrap-iten-in-cart">
					@if(Session::has('success_message'))
						<div>
							<strong>{{__('mshmk.Success')}}</strong>{{ Session::get('success_message')}}
						</div>
					@endif
					@if(Cart::instance('cart')->count() > 0 )
						<h3 class="box-title">{{__('mshmk.Products_Name')}}</h3>
						<ul class="products-cart">
							@foreach(Cart::instance('cart')->content() as $item)
									<li class="pr-cart-item">
										<div class="product-image">
											<figure><img src="{{asset('assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
										</div>
										<div class="product-name">
											<a class="link-to-product" href="{{ route('products.details' ,['slug' => $item->model->slug ]) }}">{{$item->model->name}}</a>
										</div>
										<div class="price-field produtc-price"><p class="price">${{ $item->model->regular_price }}</p></div>
										<div class="quantity">
											<div class="quantity-input">
												<input type="text" name="product-quatity" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*" >									
												<a class="btn btn-increase" href="#" wire:click.prevent="increasecartby_1({{ $item->rowId }})"></a>
												<a class="btn btn-reduce" href="#"wire:click.prevent="decreasecartby_1({{ $item->rowId }})"></a>
											</div>
											<p class="text-center"><a href="#" wire:click.prevent="switchToSaveForLater('{{$item->rowId}}')">{{__('mshmk.Saved_For_Later')}}</a></p>
										</div>
										<div class="price-field sub-total"><p class="price">${{ $item->sub_total}}</p></div>
										<div class="delete">
											<a href="#" class="btn btn-delete" title="" wire:click.prevent="destroy({{$item->rowId}})">
												<span>{{__('mshmk.Delete_from_your_cart')}}</span>
												<i class="fa fa-times-circle" aria-hidden="true"></i>
											</a>
										</div>
									</li>
							@endforeach										
						</ul>
					@else
						<p>{{__('mshmk.No_Item_In_Cart')}}</p>
					@endif
				</div>
<!--ملخص الطلب-->
				<div class="summary" >
					<div class="order-summary">
						<h4 class="title-box">{{__('mshmk.Order_Summary')}}</h4>
						<p class="summary-info"><span class="title">{{__('mshmk.Subtotal')}}</span><b class="index">${{ Cart::instance()->subtotal() }}</b></p>
						@if(Session::has('coupon'))
							<p class="summary-info"><span class="title">{{__('mshmk.Discount')}}({{Session::get('coupon')['code']}}) <a href="#" wire:click.prevent= "removeCoupon"><i class="fa fa-times text-danger"></i></a></span></span><b class="index"> -${{number_format($discount,2)}}</b></p>
							<p class="summary-info"><span class="title">{{__('mshmk.Subtotal_with_Discount')}}</span></span><b class="index">${{number_format($subtotalAfterDiscount,2)}}</b></p>
							<p class="summary-info"><span class="title">{{__('mshmk.Tax')}} ({{config('cart.tax')}}%)</span></span><b class="index">${{number_format($taxAfterDiscount,2)}}</b></p>                        
							<p class="summary-info total-info "><span class="title">{{__('mshmk.Total')}}</span><b class="index">${{number_format($totalAfterDiscount,2)}}</b></p>
						@else
							<p class="summary-info"><span class="title">{{__('mshmk.Tax')}}</span><b class="index">${{Cart::instance('cart')->tax()}}</b></p>
							<p class="summary-info"><span class="title">{{__('mshmk.Shipping')}}</span><b class="index">{{__('mshmk.Free_Shipping')}}</b></p>
							<p class="summary-info total-info "><span class="title">{{__('mshmk.Total')}}</span><b class="index">${{Cart::instance('cart')->total()}}</b></p>
						@endif  
					</div>
					<div class="checkout-info">
						@if(!Session::has('coupon'))  
							<label class="checkbox-field">
								<input class="frm-input " name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode"><span>{{__('mshmk.I_have_coupon_code')}}</span>
							</label>
							@if($haveCouponCode == 1)
								<div class="summary-item">
									<form wire:submit.prevent="applyCouponCode">
										<h4 class="title-box">{{__('mshmk.Coupon_Code')}}</h4>
										@if(Session::has('coupon_message'))
											<div class="alert alert-danger" role="danger">{{Session::get('coupon_message')}}</div>
										@endif
										<p class="row-in-form">
											<label for="coupon-code">{{__('mshmk.Enter_your_coupon_code:')}}</label>
											<input type="text" name="coupon-code" wire:model="couponCode" />
										</p>
										<button type="submit" class="btn btn-small">{{__('mshmk.Apply')}}</button>
									</form>
								</div>
							@endif
						@endif
						<a class="btn btn-checkout" href="{{route('product.checkout')}}" >{{__('mshmk.Check_out')}}</a>                    
						<a class="link-to-shop" href="/shop">{{__('mshmk.Continue_Shopping')}}<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>

					<div class="update-clear">
						<a class="btn btn-clear" href="#" wire:click.prevent="destroyall()" >{{__('mshmk.Clear_Shopping_Cart')}}</a>
						<a class="btn btn-update" href="#">{{__('mshmk.Update_Shopping_Cart')}}</a>
					</div>
				</div>
				@else
					<div class="text-center" style="padding: 30px 0;">
						<h1>{{__('mshmk.Your_Cart_Is_Empty!')}}</h1>
						<p>{{__('mshmk.ADD_Items_To_It_Now')}}</p>
						<a href="/shop" class="btn btn-success" >{{__('mshmk.Shop_Now')}}</a>
					</div>
				@endif
<!--ملخص الطلب-->
				<div class="wrap-iten-in-cart">
					<h3 class="title-box" style="border-bottom: 1px solid; padding-bottom:15px;">{{Cart::instance('saveForLater')->count()}} {{__('mshmk.Item(s)')}} {{__('mshmk.Saved_For_Later')}}</h3>
					@if(Session::has('s_success_message'))
						<div>
							<strong>{{__('mshmk.Success')}}</strong>{{ Session::get('s_success_message')}}
						</div>
					@endif
					@if(Cart::instance('cart')->count() > 0 )
						<h3 class="box-title">{{__('mshmk.Products_Name')}}</h3>
						<ul class="products-cart">
							@foreach(Cart::instance('saveForLater')->content() as $item)
									<li class="pr-cart-item">
										<div class="product-image">
											<figure><img src="{{asset('assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
										</div>
										<div class="product-name">
											<a class="link-to-product" href="{{ route('products.details' ,['slug' => $item->model->slug ]) }}">{{$item->model->name}}</a>
										</div>
										@foreach ($item->options  as $key=>$value)
											<div style="vertical-align:middle; width:180px;">
												<p><b>{{$key}}: {{$value}}</b></p>
											</div>
										@endforeach
										<div class="price-field produtc-price"><p class="price">${{ $item->model->regular_price }}</p></div>
										<div class="quantity">
											<div class="quantity-input">
												<input type="text" name="product-quatity" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*" >									
												<a class="btn btn-increase" href="#" wire:click.prevent="increasecartby_1({{ $item->rowId }})"></a>
												<a class="btn btn-reduce" href="#"wire:click.prevent="decreasecartby_1({{ $item->rowId }})"></a>
											</div>
											<p class="text-center"><a href="#" wire:click.prevent="moveToCart('{{$item->rowId}}')">{{__('mshmk.Move_To_Cart')}}</a></p>
										</div>
										<div class="delete">
											<a href="#" class="btn btn-delete"  wire:click.prevent="deleteFromSaveForLater({{$item->rowId}})">
												<span>{{__('mshmk.Delete_from_save_for_later')}}</span>
												<i class="fa fa-times-circle" aria-hidden="true"></i>
											</a>
										</div>
									</li>
							@endforeach										
						</ul>
					@else
						<p>{{__('mshmk.No_Item_Saved_For_Later')}}</p>
					@endif
				</div>
			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
<div>
