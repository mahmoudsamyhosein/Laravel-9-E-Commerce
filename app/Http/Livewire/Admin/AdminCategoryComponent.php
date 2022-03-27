<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategoryComponent extends Component
{
    use WithPagination;
    public $category;
    public function destroycategory($id){
        $category = Category::find($id);
        $category->delete();
        Session()->flash('message',trans('mshmk.Category_Has_Been_Deleted_Successfully!'));
    }
    public function deletesubcategory($id){
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message','Subcategory Has Been Deleted!');
    }
    public function render()
    {
        $categories = Category::paginate(12);
        return view('livewire.admin.admin-category-component' ,['categories' => $categories ])->layout('layouts.base');
    }
}
