<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminEditAttributeComponent extends Component
{
    public $name;
    public $attribute_id;
    public function mount($attribute_id){
        $pattribute = ProductAttribute::find($attribute_id);
        $this->attribute_id = $pattribute->id;
        $this->name = $pattribute->name;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }
    public function updateattribute(){
        $this->validate([
            'name' => 'required',
        ]);
        $pattribute = ProductAttribute::find($this->attribute_id);
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message',trans('mshmk.Attribute_Has_Been_Updated_Successfully!'));
    }

    public function render()
    {
        return view('livewire.admin.attributes.admin-edit-attribute-component')->layout('layouts.base');
    }
}
