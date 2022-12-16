<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    static $categories = [
        'Men',
        'Women',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$categories as $category) {
            Category::query()
                ->create([
                    'name' => $category
                ]);
        }
    }
}
