<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Setting;

class BaseLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {   
        return view('layouts.base');
    }
}
