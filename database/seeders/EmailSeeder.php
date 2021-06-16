<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("emails")->insert([
            "mail" => "info@example.com",
            "contact_id" => 1,
            "footer_id" => 1
        ]);

        DB::table("emails")->insert([
            "mail" => "contact@example.com",
            "contact_id" => 1,
            "footer_id" => 1
        ]);
    }
}
