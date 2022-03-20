<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
