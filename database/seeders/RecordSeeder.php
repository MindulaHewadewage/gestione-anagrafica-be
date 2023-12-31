<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;


class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        $roles = [
            [
                'label' => 'Italiano',
                'color' => '#e91a1a',
                'image' => 'https://www.kikkoman.it/fileadmin/_processed_/d/0/csm_Italien_0525c8ba3c.jpg',
            ],
        ];

        for ($i = 0; $i < 30; $i++) {
            $newRecord = new Record();

            $newRecord->name = $faker->firstNameMale();
            $newRecord->lastname = $faker->lastName();
            $newRecord->email = $faker->email();
            $newRecord->address = $faker->address();
            $newRecord->tax_id = $faker->taxId();
            $newRecord->vat_number = $faker->vat();
            $newRecord->phone = $faker->randomNumber(9, true) . $faker->randomNumber(2, true);
            $newRecord->role = $faker->jobTitle();
            $newRecord->available = $faker->boolean();
            $newRecord->phone = $faker->randomNumber(9, true) . $faker->randomNumber(2, true);

            $newRecord->save();
        }
    }
}
