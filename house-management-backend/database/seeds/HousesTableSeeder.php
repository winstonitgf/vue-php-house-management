<?php

use Illuminate\Database\Seeder;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        House::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            House::create([
                'city' => $faker->city,
                'district' => $faker->streetName,
                'kind' => $faker->cityPrefix,
                'area' => $faker->numberBetween($min = 10, $max = 50),
                'pattern' => $faker->numberBetween($min = 1, $max = 5),
                'price' => $faker->numberBetween($min = 10000, $max = 50000),
            ]);
        }
    }
}
