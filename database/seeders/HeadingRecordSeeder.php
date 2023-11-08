<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heading;
use App\Models\Record;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HeadingRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heading_ids = Heading::pluck('id')->toArray();
        $record_ids = Record::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            DB::table('heading_record')->insert([
                'heading_id' => Arr::random($heading_ids),
                'record_id' => Arr::random($record_ids),
            ]);
        }
    }
}
