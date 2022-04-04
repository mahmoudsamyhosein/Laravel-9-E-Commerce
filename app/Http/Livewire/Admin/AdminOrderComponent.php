<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;
    public function updateOrderStatus($order_id,$status){
        $order = Order::find($order_id);
        $order->status = $status;
        if($status == "delivered"){
            $order->delivered_date = DB::raw('CURRENT_DATE');
        }elseif($status == "canceled"){
            $order->canceled_date = DB::raw('CURRENT_DATE');

        }
        $order->save();
        session()->flash('order_message',trans('mshmk.Order_Status_Has_Been_Successfully!'));
    }
    public function render()
    {
        $setting = Setting::find(1);
        $orders = Order::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.orders.admin-order-component',['orders' => $orders , 'setting' => $setting ])->layout('layouts.base');
    }
}
