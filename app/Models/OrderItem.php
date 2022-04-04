<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        
        return $this->belongsTo(Product::class);
    }
    public function review(){
        
        return $this->hasone(Review::class,'order_item_id');
    }
}
