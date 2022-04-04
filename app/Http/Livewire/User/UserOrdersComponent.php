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
use Livewire\WithPagination;
class UserOrdersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $setting = Setting::find(1);
        $orders = Order::where('user_id',Auth::user()->id)->paginate(12);
        return view('livewire.user.user-orders-component',[ 'orders' => $orders, 'setting' => $setting  ])->layout('layouts.base');
    }
}
