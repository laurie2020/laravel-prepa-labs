<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("homes")->insert([
            "title" => "Build Better Websites With Bikin",
            "description" => "We are team of talented designers making websites with Bootstrap",
            "button" => "Get Started",
            "image" => "hero-img.png"
        ]);
    }
}
