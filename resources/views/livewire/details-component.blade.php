<div>
<!--main area-->
	<main id="main" class="main-site" >
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.Home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.product_details')}}</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
							<div class="detail-media">
								<div class="product-gallery">
								<ul class="slides">
									<li data-thumb="{{ asset('assets/images/products')}}/{{$product->image}}">
										<img src="{{ asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}" />
									</li>
								</ul>
								</div>
							</div>
							<div class="detail-info"  dir="rtl" style="text-align: right">
								<div class="product-rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<a href="#" class="count-review">(05 review)</a>
								</div>
								<h2 class="product-name">{{ $product->name }}</h2>
								<div class="short-desc">
									<ul>
										{!! $product->short_description !!}
									</ul>
								</div>
								
								@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
								<div class="wrap-price"><ins><p class="product-price">${{$product->sale_price}}</p></ins> <del><p class="product-price">${{$product->regular_price}}</p></del></div>
								@else
									<div class="wrap-price"><span class="product-price">${{ $product->regular_price }}</span></div>
								@endif
								<div class="stock-info in-stock">
									<p class="availability">{{__('mshmk.Availability:')}}<b>{{ $product->stock_status }}</b></p>
								</div>
								<div class="quantity">
									<span>{{__('mshmk.Quantity:')}}</span>
									<div class="quantity-input">
										<input type="text" name="{{ $product->quantity }}" value="1" data-max="120" pattern="[0-9]*" wire:model='qty' >
										<a class="btn btn-reduce" href="#" wire:click.prevent="decreasequantity"></a>
										<a class="btn btn-increase" href="#" wire:click.prevent="increasequantity"></a>
									</div>
								</div>
								<div class="wrap-butons">
									@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
										<a href="#" class="btn add-to-cart" wire:click.prevent="store( {{ $product->id }},{{ $product->name }},{{ $product->sale_price }} )">{{__('mshmk.Add_To_Cart')}}</a>
									@else
										<a href="#" class="btn add-to-cart" wire:click.prevent="store( {{ $product->id }},{{ $product->name }},{{ $product->regular_price }} )">{{__('mshmk.Add_To_Cart')}}</a>
									@endif
									<div class="wrap-btn">
										<a href="#"  class="btn btn-wishlist">{{__('mshmk.Add_Wishlist')}}</a>
									</div>
								</div>
							</div>
							<div class="advance-info">
								<div class="tab-control normal">
									<a href="#description" class="tab-control-item active">{{__('mshmk.description')}}</a>
									<a href="#add_infomation" class="tab-control-item">{{__('mshmk.Addtional_Infomation')}}</a>
									<a href="#review" class="tab-control-item">{{__('mshmk.Reviews')}}</a>
								</div>
								<div class="tab-contents">
									<div class="tab-content-item active" id="description">
										{!! $product->description !!}
									</div>
									{{-- جدول وصف المنتج --}}
									<div class="tab-content-item " id="add_infomation">
										<table class="shop_attributes">
											<tbody>
												<tr>
													<th>Weight</th><td class="product_weight">1 kg</td>
												</tr>
												<tr>
													<th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
												</tr>
												<tr>
													<th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
												</tr>
											</tbody>
										</table>
									</div>
									{{-- جدول وصف المنتج --}}
									{{-- مراجعات المنتج--}}
									<div class="tab-content-item " id="review"dir="rtl" style="text-align: right">
										
										<div class="wrap-review-form">
											
											<div id="comments">
												<h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
												<ol class="commentlist">
													<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
														<div id="comment-20" class="comment_container"> 
															<img alt="" src="{{ asset('assets/images/author-avata.jpg ') }}" height="80" width="80">
															<div class="comment-text">
																<div class="star-rating">
																	<span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
																</div>
																<p class="meta"> 
																	<strong class="woocommerce-review__author">admin</strong> 
																	<span class="woocommerce-review__dash">–</span>
																	<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
																</p>
																<div class="description">
																	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
																</div>
															</div>
														</div>
													</li>
												</ol>
											</div><!-- #comments -->

											<div id="review_form_wrapper"dir="rtl" style="text-align: right">
												<div id="review_form">
													<div id="respond" class="comment-respond"> 

														<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
															</p>
															<div class="comment-form-rating">
																<span>Your rating</span>
																<p class="stars">
																	
																	<label for="rated-1"></label>
																	<input type="radio" id="rated-1" name="rating" value="1">
																	<label for="rated-2"></label>
																	<input type="radio" id="rated-2" name="rating" value="2">
																	<label for="rated-3"></label>
																	<input type="radio" id="rated-3" name="rating" value="3">
																	<label for="rated-4"></label>
																	<input type="radio" id="rated-4" name="rating" value="4">
																	<label for="rated-5"></label>
																	<input type="radio" id="rated-5" name="rating" value="5" checked="checked">
																</p>
															</div>
															<p class="comment-form-author">
																<label for="author">Name <span class="required">*</span></label> 
																<input id="author" name="author" type="text" value="">
															</p>
															<p class="comment-form-email">
																<label for="email">Email <span class="required">*</span></label> 
																<input id="email" name="email" type="email" value="" >
															</p>
															<p class="comment-form-comment">
																<label for="comment">Your review <span class="required">*</span>
																</label>
																<textarea id="comment" name="comment" cols="45" rows="8"></textarea>
															</p>
															<p class="form-submit">
																<input name="submit" type="submit" id="submit" class="submit" value="Submit">
															</p>
														</form>

													</div><!-- .comment-respond-->
												</div><!-- #review_form -->
											</div><!-- #review_form_wrapper -->

										</div>
									</div>
								{{-- مراجعات المنتج--}}

							</div>
						</div>
					</div>
				</div><!--end main products area-->

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar" dir="rtl" style="text-align: right" >
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
												<div class="wrap-price"><span class="product-price">${{$p_product->regular_price}}</span></div>
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
													<div class="wrap-price"><span class="product-price">${{$r_product->regular_price}}</span></div>
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