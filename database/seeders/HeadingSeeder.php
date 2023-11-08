<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heading;
use Faker\Generator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */



    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $newHeading = new Heading();
            $newHeading->user_id = $faker->numberBetween(1, 3);
            $newHeading->name = $faker->firstNameMale();
            $newHeading->lastname = $faker->lastName();
            $newHeading->email = $faker->email();
            $newHeading->company = $faker->company();
            $newHeading->save();
        }
    }
}
