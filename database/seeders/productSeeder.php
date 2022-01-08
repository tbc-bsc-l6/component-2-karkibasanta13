<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $faker = Faker::create();
            foreach (range(1, 10) as $index) {
                DB::table('product')->insert([
                    'type' => $faker->type('Book', 'CD', 'Game'),
                    'firstname' => $faker->firstName,
                    'mainname' => $faker->lastName,
                    'title' => $faker->title,
                    'numpages' => $faker->numberBetween(1,100),
                    'price' => $faker->randomDigit()
                ]);
            }
        }


    }
}
