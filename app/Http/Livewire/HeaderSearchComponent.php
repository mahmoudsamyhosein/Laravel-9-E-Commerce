<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    //خواص صنف البحث 
    public $search;
    public $product_cat;
    public $product_cat_id;


    public function mount(){

        $this->product_cat = "All Category";
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.header-search-component' ,['categories' => $categories ])->layout('layouts.base');
    }
}
