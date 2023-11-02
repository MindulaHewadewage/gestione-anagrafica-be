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
    // public function run(Generator $faker): void
    // {
    //     for ($i = 0; $i < 5; $i++) {
    //         $newHeading = new Heading();
    //         $newHeading->name = $faker->firstNameMale();
    //         $newHeading->lastname = $faker->lastName();
    //         $newHeading->email = $faker->email();
    //         $newHeading->phone = $faker->phoneNumber();
    //         $newHeading->address = $faker->address();
    //         $newHeading->birth_date = $faker->dateTime();
    //         $newHeading->tax_id = $faker->randomNumber(5, true);
    //         $newHeading->save();
    //     }
    // }


    public function run()
    {
        $headings = [

            // ********USER ID 1********
            [
                "user_id" => 1,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 1,
                "name" => "Giancarlo",
                "lastname" => "Verdi",
                "email" => "giancarloverdi@gmail.com",
                "phone" => 327698,
                "address" => "Via Alessandro, 40, 20127, Milan, Italy",
                "tax_id" => "DYPVSM35B12H593D"
            ],
            [
                "user_id" => 1,
                "name" => "Gianfilippo",
                "lastname" => "Bianchi",
                "email" => "gianfilippobianchi@gmail.com",
                "phone" => 387690,
                "address" => "Via Colosseo, 70, 20127, Milan, Italy",
                "tax_id" => "YNGFTP41R22B577T"
            ],

            // ********USER ID 2********
            [
                "user_id" => 2,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 2,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 2,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            // ********USER ID 3********
            [
                "user_id" => 3,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 3,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 3,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 4********
            [
                "user_id" => 4,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 4,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 4,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 5********
            [
                "user_id" => 5,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 5,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 5,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 6********
            [
                "user_id" => 6,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 6,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 6,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 7********
            [
                "user_id" => 7,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 7,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 7,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 8********
            [
                "user_id" => 8,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 8,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 8,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 9********
            [
                "user_id" => 9,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 9,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 9,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

            //******** USER ID 10********
            [
                "user_id" => 10,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 10,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],
            [
                "user_id" => 10,
                "name" => "Filippo",
                "lastname" => "Redi",
                "email" => "filipporedi@gmail.com",
                "phone" => 327690,
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "tax_id" => "SRNJGD72B26H885D"
            ],

        ];


        foreach ($headings as $heading) {

            $newHeading = new heading();

            $newHeading->user_id = $heading["user_id"];
            $newHeading->name = $heading["name"];
            $newHeading->lastname = $heading["lastname"];
            $newHeading->email = $heading["email"];
            $newHeading->phone = $heading["phone"];
            $newHeading->address = $heading["address"];
            $newHeading->tax_id = $heading["tax_id"];
            $newHeading->save();
        }
    }
}
