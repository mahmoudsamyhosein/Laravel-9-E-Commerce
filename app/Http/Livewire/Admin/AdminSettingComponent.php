<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
* [لوحة المدير] يحتوي هذا الملف علي منطق خواص المنتج .
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class AdminSettingComponent extends Component
{
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twiter;
    public $facebook;
    public $pinterest;
    public $instagram;
    public $youtube;
    public $images;

    public function mount(){

        
        $setting = Setting::find(1);
        if($setting){
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->twiter = $setting->twiter;
            $this->facebook = $setting->facebook;
            $this->pinterest = $setting->pinterest;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
           
        }
    }
    public function update($fields){

        $this->validateOnly($fields,[

        'email' => 'required|email',
        'phone' => 'required',
        'phone2'=> 'required',
        'address'=> 'required',
        'map'=> 'required',
        'twiter'=> 'required',
        'facebook'=> 'required',
        'pinterest'=> 'required',
        'instagram'=> 'required',
        'youtube'=> 'required',

        ]);

    }

    public function savesettings(){
        $this->validate([
         'email' => 'required|email',
         'phone' => 'required',
         'phone2'=> 'required',
         'address'=> 'required',
          'map'=> 'required',
          'twiter'=> 'required',
         'facebook'=> 'required',
         'pinterest'=> 'required',
         'instagram'=> 'required',
         'youtube'=> 'required',
        ]);

        $setting = Setting::find(1);
        if(!$setting){
            $setting = new Setting();
        }
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->twiter = $this->twiter;
        $setting->facebook = $this->facebook;
        $setting->pinterest = $this->pinterest;
        $setting->instagram = $this->instagram;
        $setting->youtube = $this->youtube;
        $setting->save();
        Session()->flash('message',trans('mshmk.Setting_Has_Been_Saved!'));
    }


    public function render()
    {
        
        
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}
/*
خلصانة بشياكة
*/