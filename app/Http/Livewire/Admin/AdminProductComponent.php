<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchterm;


    public function destroyproduct($id){

        $product = Product::find($id);
        $product->delete();
        Session()->flash('message','Product Has Been Deleted Successfully !');

    }
    public function render()
    {
        $search = '%' . $this->searchterm . '%';
        $products = Product::where('name','LIKE',$search)
            ->orwhere('stock_status','LIKE',$search)
            ->orwhere('regular_price','LIKE',$search)
            ->orwhere('sale_price','LIKE',$search)
            ->orderby('id','DESC') ->paginate(10);
        return view('livewire.admin.admin-product-component',['products' => $products])->layout('layouts.base');
    }
}
