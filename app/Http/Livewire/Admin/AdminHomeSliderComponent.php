<?php

namespace App\Http\Livewire\Admin;

use App\Models\Homeslider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteslide($slide_id){

        $slider = Homeslider::find($slide_id);
        $slider->delete();
        Session()->flash('message','Slider Has Been Deleted Successfully!');

    }
    public function render()
    {
        $sliders = Homeslider::all();
        return view('livewire.admin.admin-home-slider-component' ,['sliders' => $sliders ])->layout('layouts.base');
    }
}
