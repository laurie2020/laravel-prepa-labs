<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("phones")->insert([
            "number" => "+1 5589 55488 55",
            "contact_id" => 1,
            "footer_id" => 1
        ]);

        DB::table("phones")->insert([
            "number" => "+1 6678 254445 41",
            "contact_id" => 1,
            "footer_id" => 1
        ]);
    }
}
