<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminSettingComponent extends Component
{
    use WithFileUploads;
      //بيانات المتجر
     public $store_name;
     public $currency;
     public $shipping_cost;
    //footer begin here الفوتور يبدأ من هنا
    //قسم تغيير مميزات المتجر
    //section_1
    public $section_1_icon;
    public $section_1_title;
    public $section_1_subtitle;
    //section_2
    public $section_2_icon;
    public $section_2_title;
    public $section_2_subtitle;
    //section_3
    public $section_3_icon;
    public $section_3_title;
    public $section_3_subtitle;
    //section_4
    public $section_4_icon;
    public $section_4_title;
    public $section_4_subtitle;
    //social  روابط التواصل الأجتماعي
    public $twiter;
    public $facebook;
    public $pinterest;
    public $instagram;
    public $youtube;
    //copyrights حقوق الملكية
    public $copyright;
    //App Download Link روابط تحميل التطبيق
    public $download_app_link_1;
    public $download_app_link_2;
   
    //fixed_pages الصفحات الثابتة
    public $about_shop_page_body;
    public $terms_page_body;
    public $about_privacy_body;
    public $about_return_body;
    public $about_faq_body;
    //contact us تواصل معنا 
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;

    public function mount(){
        $setting = Setting::find(1);
        if($setting){
            //بيانات المتجر
            $this->store_name = $setting->store_name;
            $this->currency = $setting->currency;
            $this->shipping_cost = $setting->shipping_cost;
            //contact us تواصل معنا 
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            //footer begin here الفوتور يبدأ من هنا
            //قسم تغيير مميزات المتجر
            //section_1
            $this->section_1_icon = $setting->section_1_icon;
            $this->section_1_title = $setting->section_1_title;
            $this->section_1_subtitle = $setting->section_1_subtitle;
            //section_2
            $this->section_2_icon = $setting->section_2_icon;
            $this->section_2_title = $setting->section_2_title;
            $this->section_2_subtitle = $setting->section_2_subtitle;
            //section_3
            $this->section_3_icon = $setting->section_3_icon;
            $this->section_3_title = $setting->section_3_title;
            $this->section_3_subtitle = $setting->section_3_subtitle;
            //section_4
            $this->section_4_icon = $setting->section_4_icon;
            $this->section_4_title = $setting->section_4_title;
            $this->section_4_subtitle = $setting->section_4_subtitle;
            //copyrights حقوق الملكية
            $this->copyright = $setting->copyright;
            //App Download Link روابط تحميل التطبيق
            $this->download_app_link_1 = $setting->download_app_link_1;
            $this->download_app_link_2 = $setting->download_app_link_2;
            //fixed_pages الصفحات الثابتة
            $this->about_shop_page_body = $setting->about_shop_page_body;
            $this->terms_page_body = $setting->terms_page_body;
            $this->about_privacy_body = $setting->about_privacy_body;
            $this->about_return_body = $setting->about_return_body;
            $this->about_faq_body = $setting->about_faq_body;
            //social  روابط التواصل الأجتماعي
            $this->twiter = $setting->twiter;
            $this->facebook = $setting->facebook;
            $this->pinterest = $setting->pinterest;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
        }
    }


    public function update($fields){

        $this->validateOnly($fields,[
        'store_name' => 'required',
        'currency' => 'required',
        'shipping_cost' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'phone2'=> 'required',
        'address'=> 'required',
        'map'=> 'required',

        'section_1_icon'=> 'required',
        'section_1_title'=> 'required',
        'section_1_subtitle'=> 'required',

        'section_2_icon'=> 'required',
        'section_2_title'=> 'required',
        'section_2_subtitle'=> 'required',

        'section_3_icon'=> 'required',
        'section_3_title'=> 'required',
        'section_3_subtitle'=> 'required',

        'section_4_icon'=> 'required',
        'section_4_title'=> 'required',
        'section_4_subtitle'=> 'required',

        'copyright'=> 'required',

        'download_app_link_1' => 'required',
        'download_app_link_2' => 'required',

        
        'about_shop_page_body' =>'required',
        'terms_page_body' =>'required',
        'about_privacy_body' =>'required',
        'about_return_body' =>'required',
        'about_faq_body' =>'required',

        'twiter'=> 'required',
        'facebook'=> 'required',
        'pinterest'=> 'required',
        'instagram'=> 'required',
        'youtube'=> 'required',

        ]);

    }

    public function savesettings(){
        $this->validate([
            'store_name' => 'required',
            'currency' => 'required',
            'shipping_cost' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'phone2'=> 'required',
            'address'=> 'required',
            'map'=> 'required',

            'section_1_icon'=> 'required',
            'section_1_title'=> 'required',
            'section_1_subtitle'=> 'required',

            'section_2_icon'=> 'required',
            'section_2_title'=> 'required',
            'section_2_subtitle'=> 'required',

            'section_3_icon'=> 'required',
            'section_3_title'=> 'required',
            'section_3_subtitle'=> 'required',

            'section_4_icon'=> 'required',
            'section_4_title'=> 'required',
            'section_4_subtitle'=> 'required',

            'copyright'=> 'required',

            'download_app_link_1' => 'required',
            'download_app_link_2' => 'required',

            

            'about_shop_page_body' =>'required',
            'terms_page_body' =>'required',
            'about_privacy_body' =>'required',
            'about_return_body' =>'required',
            'about_faq_body' =>'required',

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
        //بيانات المتجر
        $setting->store_name = $this->store_name;
        $setting->currency   = $this->currency;
        //contact us تواصل معنا 
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address ;
        $setting->map =   $this->map  ;
        //footer begin here الفوتور يبدأ من هنا
        //قسم تغيير مميزات المتجر
        //section_1
        $setting->section_1_icon = $this->section_1_icon  ;
        $setting->section_1_title = $this->section_1_title  ;
        $setting->section_1_subtitle =$this->section_1_subtitle;
        //section_2
        $setting->section_2_icon = $this->section_2_icon;
        $setting->section_2_title =$this->section_2_title;
        $setting->section_2_subtitle =$this->section_2_subtitle;
        //section_3
        $setting->section_3_icon =$this->section_3_icon;
        $setting->section_3_title =$this->section_3_title;
        $setting->section_3_subtitle =$this->section_3_subtitle;
        //section_4
        $setting->section_4_icon =$this->section_4_icon;
        $setting->section_4_title = $this->section_4_title;
        $setting->section_4_subtitle =$this->section_4_subtitle;
        //copyrights حقوق الملكية
        $setting->copyright = $this->copyright;
        //App Download Link روابط تحميل التطبيق
        $setting->download_app_link_1 = $this->download_app_link_1;
        $setting->download_app_link_2 = $this->download_app_link_2;
        //fixed_pages الصفحات الثابتة
        $setting->about_shop_page_body = $this->about_shop_page_body;
        $setting->terms_page_body = $this->terms_page_body ;
        $setting->about_privacy_body = $this->about_privacy_body;
        $setting->about_return_body = $this->about_return_body;
        $setting->about_faq_body = $this->about_faq_body;
        //social  روابط التواصل الأجتماعي
        $setting->twiter = $this->twiter;
        $setting->facebook = $this->facebook ;
        $setting->pinterest = $this->pinterest;
        $setting->instagram = $this->instagram ; 
        $setting->youtube= $this->youtube;
        $setting->save();
        Session()->flash('message',trans('mshmk.Setting_Has_Been_Saved!'));
    }
    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}
