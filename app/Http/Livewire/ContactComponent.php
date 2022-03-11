<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;


    public function updated($fields){

        $this->validateOnly($fields,[
            'name'      =>          'required',
            'email'     =>          'required | email',
            'phone'     =>          'required',
            'comment'   =>          'required',
        ]);

    }
    public function sendmessage(){
        $this->validate([
            'name'      =>          'required',
            'email'     =>          'required | email',
            'phone'     =>          'required',
            'comment'   =>          'required',
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        Session()->flash('message',' Your Message Has Been Sent Successfully!');
    }

    public function render()
    {
        $setting = Setting::find(1);
        
        return view('livewire.contact-component' ,['setting' => $setting ] )->layout('layouts.base');
    }
}
