<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create();
        foreach(range(1,400) as $index){
            DB::table("tracings")->insert([
                'first_name' => $faker ->firstNameMale,
                'last_name' => $faker ->lastName,
                'days_monitored' => $faker -> numberBetween($min = 1, $max = 14),
                'address' => $faker ->streetAddress,
                'created_at' => $faker->dateTimeBetween('-10 months ', '+10 month'),
                'updated_at' => $faker->dateTimeBetween('-10 months ', '+10 month'),
            ]);
        }
    }
}
