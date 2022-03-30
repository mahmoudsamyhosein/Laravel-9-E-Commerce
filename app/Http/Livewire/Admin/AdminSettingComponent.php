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
//بيانات المتجر store info
    public $store_name;
    public $logo_1;
    public $logo_mobile;
//contact us تواصل معنا 
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
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
    public $images;
    //copyrights حقوق الملكية
    public $copyright;
    public $copyright_links;
    //App Download Link روابط تحميل التطبيق
    public $download_app_link_1;
    public $download_app_link_2;
    //صورة طرق الدفع
    public $payment_image;
    //banners البنرات
    public $twin_banner_1;
    public $twin_banner_2;
    public $latest_products_banner;
    public $products_by_section_banner;
    public $shop_banner;
    //fixed_pages الصفحات الثابتة
    public $about_shop_page_body;
    public $terms_page_body;
    public $about_privacy_body;
    public $about_return_body;
    public $about_faq_body;

    public function mount(){
        $setting = Setting::find(1);
        if($setting){
            $this->store_name = $setting->store_name;
            $this->logo_1 = $setting->logo_1;
            $this->logo_mobile = $setting->logo_mobile;
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->section_1_icon = $setting->section_1_icon;
            $this->section_1_title = $setting->section_1_title;
            $this->section_1_subtitle = $setting->section_1_subtitle;
            $this->section_2_icon = $setting->section_2_icon;
            $this->section_2_title = $setting->section_2_title;
            $this->section_2_subtitle = $setting->section_2_subtitle;
            $this->section_3_icon = $setting->section_3_icon;
            $this->section_3_title = $setting->section_3_title;
            $this->section_3_subtitle = $setting->section_3_subtitle;
            $this->section_4_icon = $setting->section_4_icon;
            $this->section_4_title = $setting->section_4_title;
            $this->section_4_subtitle = $setting->section_4_subtitle;
            $this->copyright = $setting->copyright;
            $this->copyright_links = $setting->copyright_links;
            $this->download_app_link_1 = $setting->download_app_link_1;
            $this->download_app_link_2 = $setting->download_app_link_2;
            $this->payment_image = $setting->payment_image;
            $this->twin_banner_1 = $setting->twin_banner_1;
            $this->twin_banner_2 = $setting->twin_banner_2;
            $this->latest_products_banner = $setting->latest_products_banner;
            $this->products_by_section_banner = $setting->products_by_section_banner;
            $this->about_shop_page_body = $setting->about_shop_page_body;
            $this->terms_page_body = $setting->terms_page_body;
            $this->about_privacy_body = $setting->about_privacy_body;
            $this->about_return_body = $setting->about_return_body;
            $this->about_faq_body = $setting->about_faq_body;
        }
    }
    public function update($fields){

        $this->validateOnly($fields,[
        'store_name'=> '',
        'logo_1'=> '',
        'logo_mobile'=> '',
        'email' => 'required|email',
        'phone' => 'required',
        'phone2'=> 'required',
        'address'=> 'required',
        'map'=> 'required',
        'section_1_icon'=> '',
        'section_1_title'=> '',
        'section_1_subtitle'=> '',
        'section_2_icon'=> '',
        'section_2_title'=> '',
        'section_2_subtitle'=> '',
        'section_3_icon'=> '',
        'section_3_title'=> '',
        'section_3_subtitle'=> '',
        'section_4_icon'=> '',
        'section_4_title'=> '',
        'section_4_subtitle'=> '',
        'copyright'=> '',
        'copyright_links'=> '',
        'download_app_link_1' => '',
        'download_app_link_2' => '',
        'payment_image' => '',
        'twin_banner_1' =>'',
        'twin_banner_2' =>'',
        'latest_products_banner' =>'',
        'products_by_section_banner' =>'',
        'shop_banner' =>'',
        'about_shop_page_body' =>'',
        'terms_page_body' =>'',
        'about_privacy_body' =>'',
        'about_return_body' =>'',
        'about_faq_body' =>'',
        'twiter'=> 'required',
        'facebook'=> 'required',
        'pinterest'=> 'required',
        'instagram'=> 'required',
        'youtube'=> 'required',

        ]);

    }

    public function savesettings(){
        $this->validate([
            'store_name'=> '',
            'logo_1'=> '',
            'logo_mobile'=> '',
            'email' => 'required|email',
            'phone' => 'required',
            'phone2'=> 'required',
            'address'=> 'required',
            'map'=> 'required',
            'section_1_icon'=> '',
            'section_1_title'=> '',
            'section_1_subtitle'=> '',
            'section_2_icon'=> '',
            'section_2_title'=> '',
            'section_2_subtitle'=> '',
            'section_3_icon'=> '',
            'section_3_title'=> '',
            'section_3_subtitle'=> '',
            'section_4_icon'=> '',
            'section_4_title'=> '',
            'section_4_subtitle'=> '',
            'copyright'=> '',
            'copyright_links'=> '',
            'download_app_link_1' => '',
            'download_app_link_2' => '',
            'payment_image' => '',
            'twin_banner_1' =>'',
            'twin_banner_2' =>'',
            'latest_products_banner' =>'',
            'products_by_section_banner' =>'',
            'shop_banner' =>'',
            'about_shop_page_body' =>'',
            'terms_page_body' =>'',
            'about_privacy_body' =>'',
            'about_return_body' =>'',
            'about_faq_body' =>'',
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
        $this->store_name = $setting->store_name;
        $this->logo_1 = $setting->logo_1;
        $this->logo_mobile = $setting->logo_mobile;
        $this->email = $setting->email;
        $this->phone = $setting->phone;
        $this->phone2 = $setting->phone2;
        $this->address = $setting->address;
        $this->section_1_icon = $setting->section_1_icon;
        $this->section_1_title = $setting->section_1_title;
        $this->section_1_subtitle = $setting->section_1_subtitle;
        $this->section_2_icon = $setting->section_2_icon;
        $this->section_2_title = $setting->section_2_title;
        $this->section_2_subtitle = $setting->section_2_subtitle;
        $this->section_3_icon = $setting->section_3_icon;
        $this->section_3_title = $setting->section_3_title;
        $this->section_3_subtitle = $setting->section_3_subtitle;
        $this->section_4_icon = $setting->section_4_icon;
        $this->section_4_title = $setting->section_4_title;
        $this->section_4_subtitle = $setting->section_4_subtitle;
        $this->copyright = $setting->copyright;
        $this->copyright_links = $setting->copyright_links;
        $this->download_app_link_1 = $setting->download_app_link_1;
        $this->download_app_link_2 = $setting->download_app_link_2;
        $this->payment_image = $setting->payment_image;
        $this->twin_banner_1 = $setting->twin_banner_1;
        $this->twin_banner_2 = $setting->twin_banner_2;
        $this->latest_products_banner = $setting->latest_products_banner;
        $this->products_by_section_banner = $setting->products_by_section_banner;
        $this->about_shop_page_body = $setting->about_shop_page_body;
        $this->terms_page_body = $setting->terms_page_body;
        $this->about_privacy_body = $setting->about_privacy_body;
        $this->about_return_body = $setting->about_return_body;
        $this->about_faq_body = $setting->about_faq_body;
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