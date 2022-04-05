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

class SearchComponent extends Component
{
    
    use WithPagination;
    
    public $sorting;
    public $pagesize;
    
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount(){

        $this->sorting = "default";
        $this->pagesize = 12;
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }

    public function store($product_id,$product_name,$product_price){

        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message',trans('mshmk.Item_added_in_Cart!'));
        return redirect()->route('product.cart');

    }
    
    public function render()
    {
        
        if($this->sorting == 'date'){

            $products = Product::where('name','like','%' . $this->search . '%' )->where('category_id','like','%' .$this->product_cat_id . '%')->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif($this->sorting == 'price'){

            $products = Product::where('name','like','%' . $this->search . '%' )->where('category_id','like','%' .$this->product_cat_id . '%')->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting == 'price-desc'){

            $products = Product::where('name','like','%' . $this->search . '%' )->where('category_id','like','%' .$this->product_cat_id . '%')->orderBy('regular_price','DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::where('name','like','%' . $this->search . '%' )->where('category_id','like','%' .$this->product_cat_id . '%')->paginate($this->pagesize);
        }

        $categories = Category::all();
        $popular_products = Product::all()->take(5);
        $setting = Setting::find(1);
        return view('livewire.search-component' ,['products'=> $products ,'categories' => $categories , 'popular_products' => $popular_products ,'setting' => $setting])->layout('layouts.base');
    }
}
