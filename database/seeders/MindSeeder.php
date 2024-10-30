<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('minds')->insert([
            'name' => 'happy',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
