<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponent extends Component
{ 
    public $slug; 
    public $qty;
    public $satt=[];
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price,$this->satt)->associate('App\Models\Product');
        session()->flush('success_message','Item added in Cart');
        return redirect()->route('product.cart');

    } 
    public function mount($slug){
        $this->slug = $slug;
        $this->qty = 1;
    }
    public function increasequantity(){
        $this->qty++;
    }
    public function decreasequantity(){

        if($this->qty > 1){

            $this->qty--;
        }
    }
    public function render()
    {
        $product = Product::where('slug', $this->slug )->first();
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(12)->get();
        $sale = Sale::find(1); 
        return view('livewire.details-component',[ 'product' => $product ,'popular_products' => $popular_products , 'related_products' => $related_products  ,'sale' =>$sale])->layout('layouts.base');
    }
}
