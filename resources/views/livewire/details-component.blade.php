<div>
<!--main area-->
	<main id="main" class="main-site" >
		<title>@section('title',' تفاصيل المنتج |')</title>
		<div class="container">
			<div class="wrap-breadcrumb" dir="rtl">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.product_details')}}</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area ">
					<div class="wrap-product-detail">
							<div class="detail-media">
								<div class="product-gallery" wire:ignore>
									<ul class="slides">
										<li data-thumb="{{ asset('assets/images/products' ) }}/{{$product->image}}">
											<img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}" />
										</li> 
										@php 
											$images = explode(",",$product->images);
										@endphp     
										@foreach($images as $image)
											@if($image)
												<li data-thumb="{{ asset('assets/images/products' ) }}/{{$image}}">
													<img src="{{ asset('assets/images/products') }}/{{$image}}" alt="{{$product->name}}" />
												</li> 
											@endif
										@endforeach                          
									</ul>
								</div>
							</div>
							<div class="detail-info"  dir="rtl" style="text-align: right">
								<div class="product-rating">
									<style>
										.color-grey{
											color:#e6e6e6 !important;

										}
									</style>
									@php
										$avgrating = 0;
									@endphp
									@foreach ($product->orderItems->where('rstatus',1) as $orderItem)
										@php $avgrating = $avgrating + $orderItem->review->rating; @endphp								
									@endforeach
									@for($i=1;$i<=5;$i++)
										@if ( $i<= $avgrating)
											<i class="fa fa-star" aria-hidden="true"></i>
										@else
											<i class="fa fa-star color-grey" aria-hidden="true"></i>
										@endif
									@endfor
									<a href="#" class="count-review">( {{$product->orderItems->where('rstatus',1)->count()}} {{__('mshmk.Review')}} )</a>

								</div>
								<h2 class="product-name">{{ $product->name }}</h2>
								<div class="short-desc">
									<ul>
										{!! $product->short_description !!}
									</ul>
								</div>
								
								@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
								<div class="wrap-price" ><del><p class="product-price">{{$product->regular_price}} {{$setting->currency}}</p></del><ins><p class="product-price">{{$product->sale_price}} {{$setting->currency}}</p></ins> </div>
								@else
									<div class="wrap-price"><span class="product-price"> {{ $product->regular_price }} {{$setting->currency}} </span></div>
								@endif
								<div class="stock-info in-stock">
									<p class="availability">{{__('mshmk.Availability:')}}<b>{{ $product->stock_status }}</b></p>
								</div>
								<div>
									@foreach ($product->attributeValues->unique('product_attribute_id') as $av)
										<div class="row" style="margin-top: 20px">
											<div class="col-xs-2">
												<p>{{$av->productAttribute->name}}</p>
											</div>
											<div class="col-xs-10">
												<select class="form-control" style="width: 200px;" wire:model="satt.{{$av->productAttribute->name}}">
													@foreach ($av->productAttribute->attributeValues->where('product_id',$product->id) as $pav)
														<option value="{{$pav->value}}">{{$pav->value}}</option>
													@endforeach
												</select>
											</div>
										</div>
									@endforeach
								</div>
								<div class="quantity" style="margin-top: 10px;">
									<span>{{__('mshmk.Quantity:')}}</span>
									<div class="quantity-input">
										<input type="text" name="product-quantity" value="1" data-max="120" pattern="[0-9]*" wire:model='qty' >
										<a class="btn btn-reduce" href="#" wire:click.prevent="decreasequantity"></a>
										<a class="btn btn-increase" href="#" wire:click.prevent="increasequantity"></a>
									</div>
								</div>
								<div class="wrap-butons">
									@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
										<a href="#" class="btn add-to-cart" wire:click.prevent="store( {{ $product->id }},'{{ $product->name }}',{{ $product->sale_price }} )">{{__('mshmk.Add_To_Cart')}}</a>
									@else
										<a href="#" class="btn add-to-cart" wire:click.prevent="store( {{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }} )">{{__('mshmk.Add_To_Cart')}}</a>
									@endif
									
								</div>
							</div>
							<div class="advance-info" dir="rtl" style="text-align: right">
								<div class="tab-control normal">
									<a href="#description" class="tab-control-item active">{{__('mshmk.description')}}</a>
									<a href="#review" class="tab-control-item">{{__('mshmk.Reviews')}}</a>
								</div>
								<div class="tab-contents">
									<div class="tab-content-item active" id="description">
										{!! $product->description !!}
									</div>
								{{-- مراجعات المنتج--}}
									<div class="tab-content-item " id="review"dir="rtl" style="text-align: right">
										<div class="wrap-review-form">
											<style>
												.width-0-percent{
													width:0%;
												}
												.width-20-percent{
													width:20%;
												}
												.width-40-percent{
													width:40%;
												}
												.width-60-percent{
													width:60%;
												}
												.width-80-percent{
													width:80%;
												}
												.width-100-percent{
													width:100%;
												}
											</style>
											<div id="comments">
												<h2 class="woocommerce-Reviews-title">{{$product->orderItems->where('rstatus',1)->count()}} {{__('mshmk.Review_for')}} <span>{{$product->name}}</span></h2>
												<ol class="commentlist">
													@foreach ($product->orderItems->where('rstatus',1) as $orderItem)
														<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
															<div id="comment-20" class="comment_container"> 
																<img alt="{{$orderItem->order->user->name}}" src="{{ asset('assets/images/profile') }}/{{$orderItem->order->user->profile->image}}" height="80" width="80">
																<div class="comment-text">
																	<div class="star-rating">
																		<span class="width-{{ $orderItem->review->rating * 20 }}-percent">{{__('mshmk.Rated')}} <strong class="rating">{{ $orderItem->review->rating  }}</strong> {{__('mshmk.out_of_5')}}</span>
																	</div>
																	<p class="meta"> 
																		<strong class="woocommerce-review__author">{{$orderItem->order->user->name}}</strong> 
																		<span class="woocommerce-review__dash">–</span>
																		<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A')}}</time>
																	</p>
																	<div class="description">
																		<p>{{$orderItem->review->comment}}</p>
																	</div>
																</div>
															</div>
														</li>
													@endforeach

												</ol>
											</div><!-- #comments -->
										</div>
									</div>
								{{-- مراجعات المنتج--}}
							</div>
						</div>
					</div>
				</div><!--end main products area-->

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar " dir="rtl" style="text-align: right" >
						{{--المنتجات الشائعة --}}
						<div class="widget mercado-widget widget-product">
							<h2 class="widget-title">{{__('mshmk.Popular_Products')}}</h2>
							<div class="widget-content">
								<ul class="products">
									@foreach($popular_products as $p_product )
									<li class="product-item">
										<div class="product product-widget-style">
											<div class="thumbnnail">
												<a href="{{ route('products.details', ['slug' => $p_product->slug ]) }}" title="{{ $p_product->name }}">
													<figure><img src="{{ asset('assets/images/products') }}/{{$p_product->image}}" alt="{{ $p_product->name }}"></figure>
												</a>
											</div>
											<div class="product-info">
												<a href="{{ route('products.details', ['slug' => $p_product->slug ]) }}" class="product-name"><span>{{ $p_product->name }}</span></a>
												<div class="wrap-price"><span class="product-price">{{$p_product->regular_price}} {{$setting->currency}}</span></div>
											</div>
										</div>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						{{--المنتجات الشائعة --}}
					</div><!--end sitebar-->
				{{-- منتجات ذات صلة --}}
				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">{{__('mshmk.Related_Products')}}</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
								@foreach($related_products as $r_product)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('products.details',['slug'=>$r_product->slug])}}" title="{{$r_product->name}}">
												<figure><img src="{{ asset('assets/images/products')}}/{{$r_product->image}}" width="214" height="214" alt="{{$r_product->name}}"></figure>
											</a>						
										</div>
										<div class="product-info">
											<a href="{{ route('products.details',['slug'=>$r_product->slug])}}" class="product-name"><span>{{$r_product->name}}</span></a>
											<div class="wrap-price" dir="rtl"><span class="product-price">{{$r_product->regular_price}} {{$setting->currency}}</span></div>
										</div>
									</div>
								@endforeach
							</div>
						</div><!--End wrap-products-->
					</div>
				</div>
				{{-- منتجات ذات صلة --}}
			</div><!--end row-->
		</div><!--end container-->
	</main>
	<!--main area-->
</div>