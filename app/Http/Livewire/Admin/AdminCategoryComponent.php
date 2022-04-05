<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategoryComponent extends Component
{
    use WithPagination;
    public $category;
    public function destroycategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message',trans('mshmk.Category_Has_Been_Deleted_Successfully!'));
    }
    public function deletesubcategory($id){
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message',trans('mshmk.Subcategory_Has_Been_Deleted!'));
    }
    public function render()
    {
        $categories = Category::paginate(12);
        return view('livewire.admin.categories.admin-category-component' ,['categories' => $categories  ])->layout('layouts.base');
    }
}
