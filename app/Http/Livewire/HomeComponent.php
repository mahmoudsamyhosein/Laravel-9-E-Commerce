<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Homeslider;
use App\Models\Product;
use App\Models\HomeCategory;
use App\Models\Sale;
use App\Models\Setting;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeComponent extends Component
{
    
    public function render()
    {   
        $sliders = Homeslider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_categories);
        $categories = Category::whereIn('id',$cats)->get();
        $no_of_products = $category->no_of_products;
        $sproducts = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);
        if(Auth::check()){
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }
        $setting = Setting::find(1);
        return view('livewire.home-component',['sliders' => $sliders ,'lproducts' => $lproducts ,'categories'=>$categories,'no_of_products'=> $no_of_products , 'sproducts' => $sproducts ,'sale' => $sale ,'setting' => $setting])->layout('layouts.base');

    }
}
