<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use App\Models\Setting;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponent extends Component
{ 
    public $slug; 
    public $qty;
    public $satt=[];
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price,$this->satt)->associate('App\Models\Product');
        session()->flash('success_message',trans('mshmk.Item_added_in_Cart'));
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
        $setting = Setting::find(1);
        return view('livewire.details-component',[ 'product' => $product ,'popular_products' => $popular_products , 'related_products' => $related_products  ,'sale' =>$sale ,'setting' => $setting ])->layout('layouts.base');
    }
}
