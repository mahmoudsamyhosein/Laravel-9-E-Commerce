<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // استخدم حزمة faker لتوليد مقطع نصي من كلمتين 
        $category_name = $this->faker->unique()->words($nb=2,$astext=true);
        //الاسم اللطيف slug يساوي = الدالة المعرفة مسبقا 
        $slug = Str::slug($category_name);
        return [
            'name' => $category_name,
            'slug' => $slug,
        ];
    }
}
