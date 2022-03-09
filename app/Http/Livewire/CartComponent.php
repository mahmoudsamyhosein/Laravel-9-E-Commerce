<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increasecartby_1($rowId){

        $product = Cart::get($rowId);
        $qty = $product->qty +1;
        Cart::update($rowId,$qty);

    }

    public function decreasecartby_1($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty -1;
        Cart::update($rowId,$qty);

    }
    public function destroy($rowId){
       Cart::remove($rowId);
       session()->flash('success_message','Item has been removed');

    }
    
    public function destroyall(){
        Cart::destroy();
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
