<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('minds')->insert([
            'name' => 'happy😄',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('minds')->insert([
            'name' => 'sad😢',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('minds')->insert([
            'name' => 'angry😡',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('minds')->insert([
            'name' => 'fear😨',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('minds')->insert([
            'name' => 'surprise😳',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
