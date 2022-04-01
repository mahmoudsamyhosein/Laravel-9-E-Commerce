<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $table= 'product_attributes';
    // العلاقه بين البيانات One To Many 
    public function attributeValues(){
        return $this->hasMany(AttributeValue::class);
    }
}
/*
خلصانة بشياكة
*/