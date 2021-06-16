<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("links")->insert([
            "name" => "Home",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("links")->insert([
            "name" => "About us",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("links")->insert([
            "name" => "Services",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("links")->insert([
            "name" => "Terms of Services",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("links")->insert([
            "name" => "Privacy Policy",
            "link" => "#",
            "footer_id" => 1
        ]);
    }
}
