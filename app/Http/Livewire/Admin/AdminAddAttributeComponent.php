<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAddAttributeComponent extends Component
{
    public $name;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }

    public function storeAttribute(){
        $this->validate([
            'name' => 'required',
        ]);
        $pattribute = new ProductAttribute();
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message',trans('mshmk.Attribute_Has_Been_Created_Successfully!'));
    }
    public function render()
    {
        return view('livewire.admin.attributes.admin-add-attribute-component')->layout('layouts.base');
    }
}
