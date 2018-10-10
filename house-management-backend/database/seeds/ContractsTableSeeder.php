<?php

use Illuminate\Database\Seeder;
use App\Contract;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Contract::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Contract::create([
                'serialnumbers' => $faker->numberBetween($min = 1000000, $max = 2000000),
                'address' => $faker->address,
                'landholder' => $faker->lastName,
                'renter' => $faker->lastName,
                'price' => $faker->numberBetween($min = 10000, $max = 50000),
                'rent_start' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'rent_end' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);
        }
    }
}
