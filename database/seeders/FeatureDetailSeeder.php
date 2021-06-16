<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("feature_details")->insert([
            "title" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",

            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",

            "description_i" => true,

            "paragraphe1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",

            "paragraphe2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",

            "paragraphe3" => "Ullam est qui quos consequatur eos accusamus.",

            "image" => "features-1.png",

            "feature_id" => 1

        ]);

        DB::table("feature_details")->insert([
            "title" => "Corporis temporibus maiores provident",

            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",

            "description_i" => true,

            "paragraphe1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",

            "image" => "features-2.png",

            "feature_id" => 1

        ]);

        DB::table("feature_details")->insert([
            "title" => "Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas",

            "description" => "Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",

            "description_i" => false,

            "paragraphe1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",

            "paragraphe2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",

            "paragraphe3" => " Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.",

            "image" => "features-3.png",

            "feature_id" => 1

        ]);

        DB::table("feature_details")->insert([
            "title" => "Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in",

            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",

            "description_i" => true,

            "paragraphe1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",

            "image" => "features-4.png",

            "feature_id" => 1

        ]);
    }
}
