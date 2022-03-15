<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       // استخدم حزمة faker لتوليد مقطع نصي من كلمتين 
       $slider_name = $this->faker->unique()->words($nb=4,$astext=true); 
       $slider_subtitle = $this->faker->unique()->words($nb=6,$astext=true);
       
       return [
           'title' =>  $slider_name,
           'subtitle' => $slider_subtitle,
           'price' => $this->faker->numberBetween(10,50),
           'link'  =>  "/",           
           'image' => 'slider_' . $this->faker->numberBetween(1,10) .'.jpg',
           'status'=> true,
       ];
    }
}
