<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire;

use Livewire\Component;

class ThankYouPageComponent extends Component
{
    public function render()
    {
        return view('livewire.thank-you-page-component')->layout('layouts.base');
    }
}
