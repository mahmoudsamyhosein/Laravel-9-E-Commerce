<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Setting;
// livewire أستخدام 
use Livewire\Component;

class AdminOrderDetailsComponent extends Component
{
    public $order_id;
    public function mount($order_id){
        $this->order_id = $order_id;
    }

    public function render()
    {
        $setting = Setting::find(1);
        $order =  Order::find($this->order_id);
        return view('livewire.admin.orders.admin-order-details-component',['order' => $order  , 'setting' => $setting ])->layout('layouts.base');
    }
}
