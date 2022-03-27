<?php

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
        session()->flash('message','Attribute Has Been Updated Successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-attribute-component')->layout('layouts.base');
    }
}
