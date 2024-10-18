<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            'content' =>'元気！',
            'diary' =>'いっぱい勉強した！',
            'start_date_time'=>new DateTime(),
            'end_date_time'=>new DateTime(),
        ]);
    }
}
