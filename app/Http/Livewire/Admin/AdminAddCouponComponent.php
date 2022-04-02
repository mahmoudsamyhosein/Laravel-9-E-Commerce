<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponComponent extends Component
{
    // خواص الصنف كوبون
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;

    public function updated($fields){

        $this->validateOnly($fields,[
            
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required',

        ]);
    }

    public function storecoupon(){
       $this->validate([
           //بعدما تتحقق من البيانات التي أدخلها المستخدم باستخدام التابع validate
           'code' => 'required|unique:coupons',
           'type' => 'required',
           'value' => 'required|numeric',
           'cart_value' => 'required|numeric',
           'expiry_date' => 'required',
       ]);
       //ثم قم بانشاء كائن جديد وتخزين قيمة البيانات المدخلة
       $coupon = new coupon();
       $coupon->code = $this->code;
       $coupon->type = $this->type;
       $coupon->value = $this->value;
       $coupon->cart_value = $this->cart_value;
       $coupon->expiry_date = $this->expiry_date;
       // قم بحفظ البيانات بأستخدام التابع save
       $coupon->save();
       //بعد ذلك قم بطباعه الرسالة التالية لجلسة المستخدم
       session()->flash('message',trans('mshmk.coupon_Has_Been_Saved_Successfully!'));
    }

    public function render()
    {
        // دالة أعادة العرض الي المستخدم 
        return view('livewire.admin.coupons.admin-add-coupon-component')->layout('layouts.base');
    }
}
