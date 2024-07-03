<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //$this->call(UserTableAdminSeeder::class);
        //$this->call(SiteConfigurationSeeder::class); //don't run this seeder, This is not a live data
        // $this->call(TempSeeder::class);
        $this->call(CustomSeeder::class);
    }
}
