<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'type' =>$this->faker->randomElement(['CD', 'Book','Game']),
            'firstname' =>  $this->faker->firstName(),
            'mainname' =>  $this->faker->lastName(),
            'title' =>  $this->faker->word(),
            'numpages' => $this->faker->numerify('###'),
            'price' => $this->faker->numerify('##'),
        ];
    }
}
