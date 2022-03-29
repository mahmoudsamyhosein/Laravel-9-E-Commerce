<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
* [لوحة المدير] يحتوي هذا الملف علي منطق المنتج .
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchterm;
    
    public function deleteProduct($id){
        
        $product = Product::find($id);

        if($product->image){
            unlink('assets/images/products' . '/' . $product->image);
        }

        if($product->images){
            $images = explode(',',$product->images);
            foreach($images as $image){
                if($image){
                    unlink('assets/images/products' . '/' . $image);
                }
            }
        }
        
        $product->delete();
        Session()->flash('message',trans('mshmk.Product_Has_Been_Deleted_Successfully!'));
    }
    public function render()
    {
        $search = '%' . $this->searchterm . '%';
        
        $products = Product::where('name','LIKE',$search)
            ->orwhere('stock_status','LIKE',$search)
            ->orwhere('regular_price','LIKE',$search)
            ->orwhere('sale_price','LIKE',$search);
            
        $products = Product::paginate(12);
        return view('livewire.admin.admin-product-component',['products' => $products])->layout('layouts.base');
    }
}
/*
خلصانة بشياكة
*/