<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    
    use WithPagination;
    public $category;
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    
    public function mount(){
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->min_price = 1;
        $this->max_price = 1000;
    }

    public function store($product_id,$product_name,$product_price){

        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message',trans('mshmk.Item_added_in_Cart!'));
        return redirect()->route('product.cart');

    }
    public function addtowishlist($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');

    }

    public function removeFromWishList($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        
        if($this->sorting == 'date'){

            $products = Product::whereBetween('regular_price',[ $this->min_price , $this->max_price ])->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif($this->sorting == 'price'){

            $products = Product::whereBetween('regular_price',[ $this->min_price , $this->max_price ])->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting == 'price-desc'){

            $products = Product::whereBetween('regular_price',[ $this->min_price , $this->max_price ])->orderBy('regular_price','DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::whereBetween('regular_price',[ $this->min_price , $this->max_price ])->paginate($this->pagesize);
        }
        $popular_products = Product::all()->take(5);
        $categories = Category::all()->take(12);
        if(Auth::check()){
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }
        $setting = Setting::find(1);

        return view('livewire.shop-component' ,['products'=> $products ,'categories' => $categories , 'popular_products' =>  $popular_products ,'setting' => $setting ])->layout('layouts.base');
    }
}
