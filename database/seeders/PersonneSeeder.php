<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnes")->insert([
            "lastname" => "Goodman",
            "firstname" => "Saul",
            "profession" => "Ceo & Founder",
            "photo" => "testimonials-1.jpg",
            "testimonial_detail_id" => 1
        ]);

        DB::table("personnes")->insert([
            "lastname" => "Wilsson",
            "firstname" => "Sara",
            "profession" => "Designer",
            "photo" => "testimonials-2.jpg",
            "testimonial_detail_id" => 2
        ]);

        DB::table("personnes")->insert([
            "lastname" => "Karlis",
            "firstname" => "Jena",
            "profession" => "Store Owner",
            "photo" => "testimonials-3.jpg",
            "testimonial_detail_id" => 3
        ]);

        DB::table("personnes")->insert([
            "lastname" => "Brandon",
            "firstname" => "Matt",
            "profession" => "Freelancer",
            "photo" => "testimonials-4.jpg",
            "testimonial_detail_id" => 4
        ]);

        DB::table("personnes")->insert([
            "lastname" => "Larson",
            "firstname" => "John",
            "profession" => "Entrepreneur",
            "photo" => "testimonials-5.jpg",
            "testimonial_detail_id" => 5
        ]);

    }
}
