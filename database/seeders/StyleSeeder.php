<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    static $styles = [
        'Basketball Shoes',
        'Running Shoes',
        'Sandals',
        'Casual Sneakers',
        'Boots'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$styles as $style) {
            Style::query()
                ->create([
                    'name' => $style
                ]);
        }
    }
}

