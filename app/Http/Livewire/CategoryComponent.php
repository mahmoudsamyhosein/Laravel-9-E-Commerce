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
use App\Models\Subcategory;

class CategoryComponent extends Component
{
    
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $category_slug;
    public $scategory_slug;
   

    public function mount($category_slug, $scategory_slug=null){

        $this->sorting = "default";
        $this->pagesize = 12;
        $this->category_slug = $category_slug;
        $this->scategory_slug = $scategory_slug;
        
    }

    public function store($product_id,$product_name,$product_price){

        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message',trans('mshmk.Item_added_in_Cart!'));
        return redirect()->route('product.cart');

    }
    
    
    public function render()
    {
        $category_id = null;
        $category_name = "";
        $filter = "";

        if($this->scategory_slug){
            $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
            $category_id = $scategory->id;
            $category_name = $category_name;
            $filter = "sub";
        }
        else{
            $category = Category::where('slug',$this->category_slug)->first();
            $category_id = $category->id;
            $category_name = $category->name;
            $filter = "";

        }

        
        
        if($this->sorting == 'date'){

            $products = Product::where($filter,'category_id' , $category_id )->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif($this->sorting == 'price'){

            $products = Product::where($filter,'category_id' , $category_id )->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting == 'price-desc'){

            $products = Product::where($filter,'category_id' , $category_id )->orderBy('regular_price','DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::where($filter,'category_id' , $category_id )->paginate($this->pagesize);
        }
        $categories = Category::all();
        $popular_products = Product::all()->take(5);
       
        return view('livewire.category-component' ,['products'=> $products ,'categories' => $categories , 'category_name' => $category_name ,'popular_products' => $popular_products ])->layout('layouts.base');
    }
}
