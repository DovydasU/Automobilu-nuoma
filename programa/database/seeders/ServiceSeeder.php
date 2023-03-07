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
            'name' => "Vestuvių ceremonija",
            'description' => "Vestuvių ceremonija yra svarbiausia ir pati sentimentaliausia vestuvių dienos dalis.",
            'image' => "flaticon-wedding-car",
        ]);
        DB::table('services')->insert([
            'name' => "Miesto pervežimas",
            'description' => "Teikia krovinių gabenimą.",
            'image' => "flaticon-transportation",
        ]);
        DB::table('services')->insert([
            'name' => "Pervežimas į oro uostą",
            'description' => "Ieškokite, palyginkite ir užsisakykite internetu iš pasaulyje pirmaujančio pervežimo į oro uostą ir automobilių nuomos paslaugų teikėjo!",
            'image' => "flaticon-car",
        ]);
        DB::table('services')->insert([
            'name' => "Ekskursija po visą miestą",
            'description' => "Keliaukite virtualiai ir pasinaudokite mūsų vietinių kelionių gidų žiniomis!",
            'image' => "flaticon-transportation",
        ]);
    }
}