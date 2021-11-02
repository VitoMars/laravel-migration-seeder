<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_trip = new Trip();
            $new_trip->departure = $faker->city();
            $new_trip->destination = $faker->city();
            $new_trip->departure_date = $faker->date();
            $new_trip->return_date = $faker->date();
            $new_trip->save();
        }
    }
}
