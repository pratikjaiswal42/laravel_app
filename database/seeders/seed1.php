<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('test')->insert([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => '12345678',
            'user_id' => 1
        ]);

        
    }
}
