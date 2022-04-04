<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    //
    protected $table = 'attribute_values';
    // العلاقه بين البيانات One To Many 
    public function productAttribute(){
        return $this->belongsTo(ProductAttribute::class,'product_attribute_id');
    }
}
