<?php

namespace App\Http\Livewire\User;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserprofileComponent extends Component
{
    public function render()
    {
        $userprofile = Profile::where('user_id',Auth::user()->id)->first();
        if(!$userprofile){
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('livewire.user.userprofile-component',['user' => $user ])->layout('layouts.base');
    }
}
