<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sel_categories' => '1,3,2,6,4,5',
            'no_of_products' => $this->faker->numberBetween(1,50),

        ];
    }
}

