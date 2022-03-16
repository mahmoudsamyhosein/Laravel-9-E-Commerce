<?php

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
        $homepages = Page::all()->take(5);
        return view('livewire.footer-component',['setting' => $setting ],['categories' => $categories],['homepages'=>$homepages])->layout('layouts.base');
    }
}
