<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("adresses")->insert([
            "street" => "A108 Adam Street",
            "city" => "New York, NY 535022",
            "country" => "United States",
            "contact_id" => 1,
            "footer_id" => 1
        ]);
    }
}
