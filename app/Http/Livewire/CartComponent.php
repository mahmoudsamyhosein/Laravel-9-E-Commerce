<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;
class CartComponent extends Component
{
    public function increasecartby_1($rowId){

        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty +1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');

    }

    public function decreasecartby_1($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty -1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-count-component','refreshComponent');

    }
    public function destroy($rowId){
       Cart::instance('cart')->remove($rowId);
       $this->emitTo('cart-count-component','refreshComponent');
       session()->flash('success_message','Item has been removed');
       


    }
    
    public function destroyall(){
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-count-component','refreshComponent');
    }

    public function checkout(){
        if(Auth::check()){
            return redirect()->route('checkout');
        }
        else{
            return redirect()->route('login');
        }

    }

    public function setAmountForCheckout(){
        if(session()->has('coupon')){
            session()->put('checkout',[
             'discount'  => $this->discount,
             'subtotal'  => $this->subtotalAfterdiscount,
             'tax' => $this->taxAfterDiscount,
             'total' => $this->totalAfterDiscount
            ]);
        }
        else{
            session()->put('checkout',[
                'discount'  => 0,
                'subtotal'  => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax,
                'total' => Cart::instance('cart')->total()
               ]);

        }
    }
    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
