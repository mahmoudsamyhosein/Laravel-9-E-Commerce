<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactroy extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // استخدم حزمة faker لتوليد مقطع نصي من كلمتين 
        $product_name = $this->faker->unique()->words($nb=4,$astext=true);
        //الاسم اللطيف slug يساوي = الدالة المعرفة مسبقا 
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description'       =>  $this->faker->text(500),
            'regular_price'     =>  $this->faker->numberBetween(100,500),
            'SKU' => 'DIGI' .$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'IN STOCK',
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1,22) .'jpg',
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
