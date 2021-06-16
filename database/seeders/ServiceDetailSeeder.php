<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("service_details")->insert([
            "icon" => "bxl-dribbble",
            "title" => "Lorem Ipsum",
            "description" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi",
            "service_id" => 1 
        ]);

        DB::table("service_details")->insert([
            "icon" => "bx-file",
            "title" => "Sed ut perspiciatis",
            "description" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore",
            "service_id" => 1 
        ]);

        DB::table("service_details")->insert([
            "icon" => "bx-tachometer",
            "title" => "Magni Dolores",
            "description" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia",
            "service_id" => 1 
        ]);

        DB::table("service_details")->insert([
            "icon" => "bx-layer",
            "title" => "Nemo Enim",
            "description" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
            "service_id" => 1 
        ]);
    }
}
