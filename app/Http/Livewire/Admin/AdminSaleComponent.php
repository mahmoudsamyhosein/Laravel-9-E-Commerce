<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Sale;
use Illuminate\Contracts\Session\Session;

class AdminSaleComponent extends Component
{
    public $sale_date;
    public $status;

    public function mount(){
       $sale = Sale::find(1);
       $this->sale_date = $sale->sale_date;
       $this->status = $sale->status; 
    }

    public function updatesale(){
        $sale = Sale::find(1);
        $sale->sale_date = $this->sale_date;
        $sale->status = $this->status;
        $sale->save();

        Session()->flash('message',trans('mshmk.Record_Has_Been_Updated_Successfully!'));

    }
    public function render()
    {
        return view('livewire.admin.admin-sale-component')->layout('layouts.base');
    }
}
