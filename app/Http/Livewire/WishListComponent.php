<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
class WishListComponent extends Component
{
    public function removeFromWishList($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    public function moveproductfromwishisttocart($rowId){

        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        $this->emitTo('cart-count-component','refreshComponent');


    }

    public function render()
    {
        return view('livewire.wish-list-component')->layout('layouts.base');
    }
}
