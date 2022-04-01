<div class="wrap-icon-section minicart">
    <a href="{{route('product.cart')}}" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::instance('cart')->count() > 0 )
                <span class="index" style="margin-right:5px;">{{Cart::instance('cart')->count()}} {{__('mshmk.items') }}</span>
            @endif
            <span class="title" style="margin-right:5px;" >{{__('mshmk.Cart') }}</span>
        </div>
    </a>
</div>