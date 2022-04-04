<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserOrderDetailsComponent extends Component
{
    public $order_id;
    public function mount($order_id){

        $this->order_id = $order_id;

    }

    public function cancleorder(){
        $order = Order::find($this->order_id);
        $order->status = "canceled";
        $order->canceled_date = DB::raw('CURRENT_DATE');
        $order->save();
        session()->flash('order_message',trans('mshmk.Order_Has_Been_Canceled!'));
    }
    public function render()
    {
        $setting = Setting::find(1);
        $order = Order::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        return view('livewire.user.user-order-details-component',['order' => $order ,'setting' => $setting ])->layout('layouts.base');
    }
}
