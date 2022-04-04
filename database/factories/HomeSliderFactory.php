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
       $slider_name = 'هذا النص هو مثال لنص'; 
       $slider_subtitle = 'هذا النص هو مثال لنص'; 
       
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
