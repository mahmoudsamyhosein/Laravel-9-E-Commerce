<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Http\Livewire\User;

use App\Models\OrderItem;
use App\Models\Review;
use Livewire\Component;

class UserReviewComponent extends Component
{
    public $order_item_id;
    public $rating;
    public $comment;

    public function mount($order_item_id){
        $this->order_item_id = $order_item_id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'rating' => 'required',
            'comment' => 'required',
        ]);
    }
    public function addreview(){

        $this->validate([
            'rating' => 'required',
            'comment' => 'required',
        ]);
        $review = new Review();
        $review->rating     = $this->rating;
        $review->comment    = $this->comment;
        $review->order_item_id = $this->order_item_id;
        $review->save();

        $orderItem = OrderItem::find($this->order_item_id);
        $orderItem->rstatus = true;
        $orderItem->save();

        session()->flash('message',trans('mshmk.Your_Review_Has_Been_Added_Successfully!'));
    }

    public function render()
    {
        $orderItem = OrderItem::find($this->order_item_id);
        return view('livewire.user.user-review-component',['orderItem' => $orderItem])->layout('layouts.base');
    }
}
