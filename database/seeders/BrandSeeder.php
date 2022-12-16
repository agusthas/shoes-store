<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    static $brands = [
        'Nike',
        'Adidas',
        'Under Armour',
        'Asics',
        'Lacoste',
        'Converse',
        'Crocs',
        'Puma',
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$brands as $name) {
            Brand::query()
                ->create([
                    'name' => $name,
                    'description' => "<p><strong> An Icon Of Air </strong> <br>The Men’s Nike Air Max 90 is truly one of the most iconic sneakers of all time. Released in a plethora of color combinations and materials throughout the years, the popular Air Max retro shoe can be found on the feet of connoisseurs across the globe, loved for its clean, timeless style and excellent comfort. The Air Max 90 was first released in 1990, and is yet another classic design by Nike’s design genius, Tinker Hatfield. Making a name for itself instantly when it debuted in the now-iconic “Infrared” colorway with the biggest visible Air bubble yet at the time, the model has transitioned from a high-performance runner packed with maximum Air to an essential casual sneaker found in the rotations of virtually every Air Max running shoe enthusiast new and old. If it’s a classically cool sneaker with all-day comfort you’re looking for, you can simply do no wrong with the Air Max 90.</p>"
                ]);
        }
    }
}
