<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("workers")->insert([
            "lastname" => "White",
            "firstname" => "Walter",
            "poste" => "Chief Executive Officer",
            "photo" => "team-1.jpg",
            "team_id" => 1
        ]);

        DB::table("workers")->insert([
            "lastname" => "Jhonson",
            "firstname" => "Sarah",
            "poste" => "Product Manager",
            "photo" => "team-2.jpg",
            "team_id" => 1
        ]);

        DB::table("workers")->insert([
            "lastname" => "Anderson",
            "firstname" => "William",
            "poste" => "CTO",
            "photo" => "team-3.jpg",
            "team_id" => 1
        ]);

        DB::table("workers")->insert([
            "lastname" => "Jepson",
            "firstname" => "Amanda",
            "poste" => "Accountant",
            "photo" => "team-4.jpg",
            "team_id" => 1
        ]);
    }
}
