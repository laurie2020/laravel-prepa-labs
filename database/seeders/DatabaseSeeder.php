<?php

namespace Database\Seeders;

use App\Models\AboutFact;
use App\Models\FeatureDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AboutSeeder::class,
            AboutFactSeeder::class,
            ContactSeeder::class,
            FeatureSeeder::class,
            FeatureDetailSeeder::class,
            FooterSeeder::class,
            EmailSeeder::class,
            AdresseSeeder::class,
            HomeSeeder::class,
            LinkSeeder::class,
            NewsletterSeeder::class,
            PersonneSeeder::class,
            PhoneSeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            ServiceDetailSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            TestimonialDetailSeeder::class,
            WorkerSeeder::class,
            FooterServiceSeeder::class,
            UserSeeder::class
        ]);
    }
}
