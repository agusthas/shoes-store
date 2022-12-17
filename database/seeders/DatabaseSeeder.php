<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeders = [
            UserSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            StyleSeeder::class,
            SizeSeeder::class,
            ShoeSeeder::class
        ];
        $this->call($seeders);
    }
}
