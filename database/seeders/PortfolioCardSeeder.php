<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolio_cards")->insert([
            "title" => "App 1",
            "description" => "App",
            "image" => "portfolio-1.jpg",
            "categorie" => "filter-app",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "Web 3",
            "description" => "Web",
            "image" => "portfolio-2.jpg",
            "categorie" => "filter-web",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "App 2",
            "description" => "App",
            "image" => "portfolio-3.jpg",
            "categorie" => "filter-app",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "Card 2",
            "description" => "Card",
            "image" => "portfolio-4.jpg",
            "categorie" => "filter-card",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "Web 2",
            "description" => "Web",
            "image" => "portfolio-5.jpg",
            "categorie" => "filter-web",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "App 3",
            "description" => "App",
            "image" => "portfolio-6.jpg",
            "categorie" => "filter-app",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "Card 1",
            "description" => "Card",
            "image" => "portfolio-7.jpg",
            "categorie" => "filter-card",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "Card 3",
            "description" => "Card",
            "image" => "portfolio-8.jpg",
            "categorie" => "filter-card",
            "portfolio_id" => 1
        ]);

        DB::table("portfolio_cards")->insert([
            "title" => "Web 3",
            "description" => "Web",
            "image" => "portfolio-9.jpg",
            "categorie" => "filter-web",
            "portfolio_id" => 1
        ]);
    }
}
