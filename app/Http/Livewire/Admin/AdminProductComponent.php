<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchTerm;
    public  $product;
   
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message',trans('mshmk.Product_Has_Been_Deleted_Successfully!'));
    } 
    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $products = Product::where('name','LIKE',$search)
                        ->orwhere('stock_status','LIKE',$search)
                        ->orwhere('regular_price','LIKE',$search)
                        ->orwhere('sale_price','LIKE',$search)
                        ->orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.products.admin-product-component',['products' => $products])->layout('layouts.base');
    }
}
