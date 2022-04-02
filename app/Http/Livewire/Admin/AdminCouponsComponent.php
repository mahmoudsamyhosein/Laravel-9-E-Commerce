<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
class AdminCouponsComponent extends Component
{

    public function deletecoupon($coupon_id){

        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message',trans('mshmk.Coupon_Has_Been_Deleted_Successfully!'));
    }

    public function render()
    {
        $coupons = Coupon::all();
        return view('livewire.admin.coupons.admin-coupons-component',['coupons' =>$coupons ])->layout('layouts.base');
    }
}
