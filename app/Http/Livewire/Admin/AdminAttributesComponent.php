<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAttributesComponent extends Component
{
    public function deleteAttribute($attribute_id){
        $pattribute = ProductAttribute::find($attribute_id);
        $pattribute->delete();
        session()->flash('message',trans('mshmk.Attribute_Has_Been_Deleted_Successfully!'));
    }
    public function render()
    {
        $pattributes = ProductAttribute::paginate(10);
        return view('livewire.admin.attributes.admin-attributes-component',[ 'pattributes' => $pattributes])->layout('layouts.base');
    }
}
