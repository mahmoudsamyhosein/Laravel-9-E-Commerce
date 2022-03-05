<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {   // layouts.base الدالة تعيد ملف العرض بالاسم 
        // المكون home-component يعيد الي الواجهة قسم رئيسي main 
        return view('livewire.home-component')->layout('layouts.base');
    }
}
