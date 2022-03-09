<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;


    public function generateslug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function store(){
        $category = new Category();
        $category->name = $this->name;
        $category->name = $this->slug;
        $category->save();
        Session()->flash('message','Category Has Been Created Successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
