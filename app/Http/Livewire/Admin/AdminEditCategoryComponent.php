<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Contracts\Session\Session;


class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $scategory_id;
    public $scategory_slug;

    public function mount($category_slug,$scategory_slug=null)
    {
        if($scategory_slug)
        {
            $this->scategory_slug = $scategory_slug;
            $scategory = Subcategory::where('slug',$scategory_slug)->first();
            $this->scategory_id = $scategory->id;
            $this->category_id = $scategory->category_id;
            $this->name = $scategory->name;
            $this->slug = $scategory->slug;
        }
        else
        {
            $this->category_slug = $category_slug;
            $category = Category::where('slug',$category_slug)->first();
            $this->category_id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;
        }        
    }
    
    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);

    }
    
    public function updatecategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        if($this->scategory_id)
            {
                $scategory = Subcategory::find($this->scategory_id);
                $scategory->name = $this->name;
                $scategory->slug = $this->slug;
                $scategory->category_id = $this->category_id;
                $scategory->save();
            }
        elseif($this->category_id)
        {
            $category = Category::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }       
        session()->flash('message',trans('mshmk.Category_has_Been_Updated_Successfully!'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.categories.admin-edit-category-component',['categories' => $categories ])->layout('layouts.base');
    }
}
