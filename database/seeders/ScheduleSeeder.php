<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            'content' => 'happy',
            'start_date_time' => DateTime::dateTimeThisDecade(),
            'end_date_time' => DateTime::dateTimeThisDecade(),
            'diary' => '勉強した'
     ]);
}
}