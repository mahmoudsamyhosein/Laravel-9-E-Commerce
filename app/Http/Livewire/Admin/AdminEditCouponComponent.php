<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminEditCouponComponent extends Component
{
    // خواص الصنف كوبون
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;

    public function mount($coupon_id){

        $coupon = Coupon::find($coupon_id);
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->coupon_id = $coupon->coupon_id;

    }

    public function updated($fields){

        $this->validateOnly($fields,[
            
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',

        ]);
    }

    public function updatecoupon(){
       $this->validate([
           //بعدما تتحقق من البيانات التي أدخلها المستخدم باستخدام التابع validate
           'code' => 'required|unique:coupons',
           'type' => 'required',
           'value' => 'required|numeric',
           'cart_value' => 'required|numeric',
       ]);
       //ثم قم بانشاء كائن جديد وتخزين قيمة البيانات المدخلة
       $coupon =  coupon::find($this->coupon_id);
       $coupon->code = $this->code;
       $coupon->type = $this->type;
       $coupon->value = $this->value;
       $coupon->cart_value = $this->cart_value;
       // قم بحفظ البيانات بأستخدام التابع save
       $coupon->save();
       //بعد ذلك قم بطباعه الرسالة التالية لجلسة المستخدم
       session()->flash('message','Coupon Has Been Updated Successfully!');
    }

    public function render()
    {
        // دالة أعادة العرض الي المستخدم 
        return view('livewire.admin.admin-edit-coupon-component' )->layout('layouts.base');
    }
}
