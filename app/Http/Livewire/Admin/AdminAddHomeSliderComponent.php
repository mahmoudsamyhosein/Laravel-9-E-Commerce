<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\Admin;

use App\Models\Homeslider;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public function mount(){
        $this->status = 0;
    }

    public function addslide(){
        $this->validate([
            'title'  => 'required',
            'subtitle'  => 'required',
            'price'  => 'required',
            'link'  =>'required',
            'image'  => 'required',
            
        ]);
        $slider = new Homeslider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('sliders',$imagename);
        $slider->image =  $imagename;
        $slider->status = $this->status;
        $slider->save();
        Session()->flash('message',trans('mshmk.Slide_Has_Been_Created_Successfully!'));

    }
    public function render()
    {
        return view('livewire.admin.home_slider.admin-add-home-slider-component')->layout('layouts.base');
    }
}
