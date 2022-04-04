<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Carbon;
class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->get()->take(10);

        $totalSales = Order::where('status','delivered')->count();
        $totalRevenue = Order::where('status','delivered')->sum('total');

        $todaySales = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenue = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->sum('total');
        $setting = Setting::find(1);
        return view('livewire.admin.admin-dashboard-component',[
            'orders'=>$orders,

            'totalSales'=>$totalSales,
            'totalRevenue'=>$totalRevenue,

            'todaySales'=>$todaySales,
            'todayRevenue'=>$todayRevenue,
            'setting'=>$setting,

            ])->layout('layouts.base');
    }
}
