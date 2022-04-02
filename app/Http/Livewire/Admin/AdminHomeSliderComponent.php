<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Homeslider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteslide($slide_id){

        $slider = Homeslider::find($slide_id);
        $slider->delete();
        Session()->flash('message',trans('mshmk.Slider_Has_Been_Deleted_Successfully!'));

    }
    public function render()
    {
        $sliders = Homeslider::all();
        return view('livewire.admin.home_slider.admin-home-slider-component' ,['sliders' => $sliders ])->layout('layouts.base');
    }
}
