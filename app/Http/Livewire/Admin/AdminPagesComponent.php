<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
* [لوحة المدير] يحتوي هذا الملف علي منطق خواص المنتج .
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPagesComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $pages = Page::paginate(12);
        return view('livewire.admin.admin-pages-component',['pages' => $pages])->layout('layouts.base');
    }
}
/*
خلصانة بشياكة
*/