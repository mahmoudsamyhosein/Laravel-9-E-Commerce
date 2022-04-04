<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        $orders =  Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $total_cost = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $total_purchase = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totalDelivered = Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCanceled = Order::where('status','canceled')->where('user_id',Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component',['orders' => $orders , 'total_cost' => $total_cost ,'total_purchase' => $total_purchase ,'totalDelivered' => $totalDelivered ,'totalCanceled' => $totalCanceled ,'setting' => $setting ])->layout('layouts.base');
    }
}
