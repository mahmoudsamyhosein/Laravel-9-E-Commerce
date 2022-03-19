<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AdminOrderComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-order-component',['orders' => $orders])->layout('layouts.base');
    }
}
