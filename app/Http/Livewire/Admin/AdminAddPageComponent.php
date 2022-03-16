<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;

class AdminAddPageComponent extends Component
{

    public $name;
    public $body;
   public function updated($fields){

    $this->validateOnly($fields,[
        'name'=>'required',
        'body'=>'required',
    ]);

   }

  
    public function addpage(){

        $this->validate([
            'name'=>'required',
            'body'=>'required',
        ]);

        $Page = new Page();
        $Page->name = $this->name;
        $Page->body = $this->body;
        $Page->save();

        session()->flash('message','Page Has Been Added Successfully !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-page-component')->layout('layouts.base');
    }
}
