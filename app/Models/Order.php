<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderitems(){
        return $this->hasMany(OrderItem::class);
    }

    public function shipping(){
        return $this->hasOne(Shipping::class);
    }


    public function transaction(){
        return $this->hasOne(Transaction::class);
    }
}
