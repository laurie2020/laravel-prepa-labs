<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("footer_services")->insert([
            "name" => "Web Design",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("footer_services")->insert([
            "name" => "Web Development",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("footer_services")->insert([
            "name" => "Product Management",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("footer_services")->insert([
            "name" => "Marketing",
            "link" => "#",
            "footer_id" => 1
        ]);

        DB::table("footer_services")->insert([
            "name" => "Graphic Design",
            "link" => "#",
            "footer_id" => 1
        ]);

    }
}
