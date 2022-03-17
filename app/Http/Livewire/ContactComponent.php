<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*THIS IS THE LOGIC TO HANDEL CONTACT US PAGE .
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class ContactComponent extends Component
{
    //خواص الصنف
    public $name;
    public $email;
    public $phone;
    public $comment;
    // دالة للتحقق وتحديث رسائل الخطأ
    public function updated($fields){

        $this->validateOnly($fields,[
            'name'      =>          'required',
            'email'     =>          'required|email',
            'phone'     =>          'required',
            'comment'   =>          'required',
        ]);
    }
    //دالة التحقق من البيانات وحفظ الرسالة بقاعدة البيانات
    public function sendmessage(){
        $this->validate([
            'name'      =>          'required',
            'email'     =>          'required|email',
            'phone'     =>          'required',
            'comment'   =>          'required',
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        Session()->flash('message','Your Message Has Been Sent Successfully!');
    }
    // دالة لتمرير المتغيرات الي العرض 
    public function render()
    {
        //متغير لتعديل واضافه محتوي الصفحة [AdminContactCoomponent.php]
        $setting = Setting::find(1);
        return view('livewire.contact-component' ,['setting' => $setting ] )->layout('layouts.base');
    }
}
