<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;
//النماذج [القسم-القسم الفرعي]
use App\Models\Category;
use App\Models\Subcategory;
// أستخدام 
use Livewire\Component;
use Illuminate\Support\Str;
class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $category_id;

    public function generateslug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function updated($fields){

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);
    }
    public function store(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);
        if($this->category_id){
            $scategory = new Subcategory();
            $scategory->name = $this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_id;
            $scategory->save();
        }
        else{
            $category = new Category();
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        
        Session()->flash('message',trans('mshmk.Category_Has_Been_Created_Successfully!'));
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.categories.admin-add-category-component',[ 'categories' => $categories])->layout('layouts.base');
    }
}
