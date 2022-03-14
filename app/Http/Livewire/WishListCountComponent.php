<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishListCountComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function render()
    {
        return view('livewire.wish-list-count-component');
    }
}
