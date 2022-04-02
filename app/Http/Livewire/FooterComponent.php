<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use App\Models\Category;
use App\Models\Page;

class FooterComponent extends Component
{
    
    public function render()
    {
        $setting = Setting::find(1);
        $categories = Category::all()->take(12);
        return view('livewire.footer-component',['setting' => $setting ,'categories' => $categories])->layout('layouts.base');
    }
}
