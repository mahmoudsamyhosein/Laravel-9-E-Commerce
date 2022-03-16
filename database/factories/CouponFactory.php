<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'code' => $this->faker->numberBetween(10,1245678901),
            'type' => 'fixed',
            'value' => $this->faker->numberBetween(100,1000),
            'cart_value' => $this->faker->numberBetween(100,1000),     

        ];
    }
}


