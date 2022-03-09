<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function destroycategory($id){
        $category = Category::find($id);
        $category->delete();
        Session()->flash('message','Category Has Been Deleted Successfully!');

    }
    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component' ,['categories' => $categories ])->layout('layouts.base');
    }
}
