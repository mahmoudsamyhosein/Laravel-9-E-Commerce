<?php
/*
*بسم الله الرحمن الرحيم والصلاة والسلام علي أشرف المرسلين سيدنا محمد
* [لوحة المستخدم] يحتوي هذا الملف علي منطق خواص المنتج .
*MY_GITHUB_ACCOUNT:https://github.com/mahmoudsamyhosein .
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    public function productAttribute(){
        return $this->belongsTo(ProductAttribute::class,'product_attribute_id');
    }
}
/*
خلصانة بشياكة
*/