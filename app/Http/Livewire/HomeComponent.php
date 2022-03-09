<?php

namespace App\Http\Livewire;

use App\Models\Homeslider;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {   // layouts.base الدالة تعيد ملف العرض بالاسم 
        // المكون home-component يعيد الي الواجهة قسم رئيسي main 
        $sliders = Homeslider::where('status',1)->get();
        return view('livewire.home-component',['sliders' => $sliders ])->layout('layouts.base');

    }
}
