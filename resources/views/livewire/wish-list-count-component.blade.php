{{-- قائمة الأمنيات --}}
<div class="wrap-icon-section wishlist">
    <a href="{{ route('product.wishlist') }}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::instance('wishlist')->count() > 0)
                <span class="index" style="margin-right:5px;">{{ Cart::instance('wishlist')->count()}} {{__('mshmk.item')}}</span>
            @endif
            <span class="title" style="margin-right:5px;">{{__('mshmk.WishList')}}</span>
        </div>
    </a>
</div>
{{-- قائمة الأمنيات --}}

