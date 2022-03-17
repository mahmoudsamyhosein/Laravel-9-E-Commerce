<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThankYouPageComponent extends Component
{
    public function render()
    {
        return view('livewire.thank-you-page-component')->layout('layouts.base');
    }
}
