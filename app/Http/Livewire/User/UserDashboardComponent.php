<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardComponent extends Component
{
    public function render()
    {
        $orders =  Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $total_cost = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $total_purchase = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totalDelivered = Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCanceled = Order::where('status','canceled')->where('user_id',Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component',['orders' => $orders , 'total_cost' => $total_cost ,'total_purchase' => $total_purchase ,'totalDelivered' => $totalDelivered ,'totalCanceled' => $totalCanceled ])->layout('layouts.base');
    }
}
