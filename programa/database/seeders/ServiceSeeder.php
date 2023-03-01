<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => "Wedding Ceremony",
            'description' => "A small river named Duden flows by their place and supplies it with the necessary regelialia.",
            'image' => "flaticon-wedding-car",
        ]);
        DB::table('services')->insert([
            'name' => "City Transfer",
            'description' => "Laba diena.",
            'image' => "flaticon-transportation",
        ]);
        DB::table('services')->insert([
            'name' => "Airport Transfer",
            'description' => "A small river named Duden flows by their place and supplies it with the necessary regelialia.",
            'image' => "flaticon-car",
        ]);
        DB::table('services')->insert([
            'name' => "Whole City Tour",
            'description' => "A small river named Duden flows by their place and supplies it with the necessary regelialia.",
            'image' => "flaticon-transportation",
        ]);
    }
}
