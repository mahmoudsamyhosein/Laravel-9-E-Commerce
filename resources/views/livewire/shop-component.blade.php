<div>
<!--main area-->
	<main id="main" class="main-site left-sidebar" >
		<title>@section('title',' المتجر |')</title>

		<div class="container">
			<div class="wrap-breadcrumb" dir="rtl">
				<ul>
					<li class="item-link"><a href="/" class="link">{{__('mshmk.home')}}</a></li>
					<li class="item-link"><span>{{__('mshmk.Shop')}}</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="banner-shop">
						<a href="/shop" class="banner-link">
							<figure><img src="{{asset('assets/images/banner/shop.jpg')}}" alt=""></figure>
						</a>
					</div>
					<div class="wrap-shop-control" dir="rtl" style="text-align: right">
						<h1 class="shop-title" >{{__('mshmk.Shop')}}</h1>
						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model='sorting'>
									<option value="default" selected="selected">{{__('mshmk.Default_sorting')}}</option>
									<option value="date">{{__('mshmk.Sort_by_newness')}}</option>
									<option value="price">{{__('mshmk.Sort_by_price:_low_to_high')}}</option>
									<option value="price-desc">{{__('mshmk.Sort_by_price:_high_to_low')}}</option>
								</select>
							</div>
							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model='pagesize'>
									<option value="12" selected="selected">{{__('mshmk.12_per_page')}}</option>
									<option value="16">{{__('mshmk.16_per_page')}}</option>
									<option value="18">{{__('mshmk.18_per_page')}}</option>
									<option value="21">{{__('mshmk.21_per_page')}}</option>
									<option value="24">{{__('mshmk.24_per_page')}}</option>
									<option value="30">{{__('mshmk.30_per_page')}}</option>
									<option value="32">{{__('mshmk.32_per_page')}}</option>
								</select>
							</div>
						</div>
					</div><!--end wrap shop control-->
					<style>
						.product-wish{
							position: absolute;
							top: 10%;
							left: 0;
							z-index: 99;
							right: 30px;
							text-align: right;
							padding-top: 0; 
						}
						.product-wish .fa{
							color:#cbcbcb;
							font-size: 32px;

						}
						.product-wish .fa:hover{
							color:#ff7007;
						}
						.fill-heart{
							color:#ff7007 !important;
						}
						.toggle-control span{
            				margin-right: 25px;
        				}
						
					</style>
					<div class="row">

						<ul class="product-list grid-products equal-container">
							@php
								$witems = Cart::instance('wishlist')->content()->pluck('id');
							@endphp
							@foreach ($products as $product)	
								<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 pull-right" dir="rtl">
									<div class="product product-style-3 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('products.details', ['slug' => $product->slug ]) }}" title="{{$product->name}}">
												<figure><img src="{{ asset ('assets/images/products') }}/{{ $product->image }}" alt="{{$product->name}}"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{ route('products.details', ['slug' => $product->slug ]) }}" class="product-name"><span>{{ $product->name }}</span></a>
											<div class="wrap-price" dir="rtl"><span class="product-price">{{ $product->regular_price }} {{$setting->currency}}</span></div>
											<a href="#" class="btn add-to-cart" wire:click.prevent="store( {{$product->id}},'{{$product->name}}',{{$product->regular_price}} )" >{{__('mshmk.Add_To_Cart')}}</a>
										</div>
										<div class="product-wish">
											@if($witems->contains($product->id))
												<a href="#" wire:click.prevent="removeFromWishList({{$product->id}})"><i class="fa fa-heart fill-heart"></i></a>
											@else
												<a href="#" wire:click.prevent="addtowishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"><i class="fa fa-heart"></i></a>	
											@endif

										</div>
									</div>
								</li>
							@endforeach
						</ul>

					</div>
					<div class="wrap-pagination-info" dir="rtl">
						{{ $products->links() }}
					</div>
				</div><!--end main products area-->
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget" dir="rtl" style="text-align: right">
						<h2 class="widget-title">{{__('mshmk.All_Categories')}}</h2>
						<div class="widget-content">
							<ul class="list-category">
								@foreach ($categories as $category)
									<li class="category-item {{count($category->subcategories) > 0 ? 'has-child-cate':''}}">
										 <a href="{{ route('product.category' , [ 'category_slug' =>$category->slug ] )}}" class="cate-link"> {{ $category->name }} </a> 
										 @if (count($category->subcategories) > 0 )
											 <span class="toggle-control">+</span>
											 <ul class="sub-cate">
												 @foreach ($category->subcategories as $scategory)
													 <li class="category-item">
														<a href="{{route('product.category',['category_slug'=> $category->slug ,'scategory_slug'=> $scategory->slug ])}}" class="cat-link"><i class="fa fa-caret-right"></i>{{$scategory->name}}</a>
													 </li>
												 @endforeach
											 </ul>
										 @endif 			
									</li>
								@endforeach
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">{{__('mshmk.search_by_price')}}</h2>
						<h2 class="widget-title">{{__('mshmk.Price:')}}<span  class="text-info"> {{$min_price}} {{$setting->currency}} - {{$max_price}} {{$setting->currency}} </span></h2>
						<div class="widget-content"  style="padding:10px 5px 40px 5px;">
							<div id="slider" wire:ignore ></div>
						</div>
					</div><!-- Price-->
					<div class="widget mercado-widget widget-product" dir="rtl">
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
				</div><!--end sitebar-->
			</div><!--end row-->
		</div><!--end container-->
	</main>
	<!--main area-->
</div>
@push('scripts')
<script>
	 var slider = document.getElementById('slider');
	 noUiSlider.create(slider,{
		 start : [1,100000],
		 connect:true,
		 range : {
			 'min' : 1,
			 'max' : 100000
 		 },
		pips:{
			mode:'steps',
			stepped:true,
			density:4	
		}
		
	 });
	 slider.noUiSlider.on('update',function(value){
		 @this.set('min_price',value[0]);
		 @this.set('max_price',value[1]);
	 });
</script>
@endpush