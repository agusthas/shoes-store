<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    static $sizes = [
        [
            'us' => 6,
            'uk' => 5.5,
            'eur' => 38.5,
            'cm' => 24,
        ],
        [
            'us' => 6.5,
            'uk' => 6,
            'eur' => 39,
            'cm' => 24.5,
        ],
        [
            'us' => 7,
            'uk' => 6,
            'eur' => 40,
            'cm' => 25,
        ],
        [
            'us' => 7.5,
            'uk' => 6.5,
            'eur' => 40.5,
            'cm' => 25.5,
        ],
        [
            'us' => 8,
            'uk' => 7,
            'eur' => 41,
            'cm' => 26,
        ],
        [
            'us' => 8.5,
            'uk' => 7.5,
            'eur' => 42,
            'cm' => 26.5,
        ],
        [
            'us' => 9,
            'uk' => 8,
            'eur' => 42.5,
            'cm' => 27,
        ],
        [
            'us' => 9.5,
            'uk' => 8.5,
            'eur' => 43,
            'cm' => 27.5,
        ],
        [
            'us' => 10,
            'uk' => 9,
            'eur' => 44,
            'cm' => 28,
        ],
        [
            'us' => 10.5,
            'uk' => 9.5,
            'eur' => 44.5,
            'cm' => 28.5,
        ],
        [
            'us' => 11,
            'uk' => 10,
            'eur' => 45,
            'cm' => 29,
        ],
        [
            'us' => 11.5,
            'uk' => 10.5,
            'eur' => 45.5,
            'cm' => 29.5,
        ],
        [
            'us' => 12,
            'uk' => 11,
            'eur' => 46,
            'cm' => 30,
        ],
        [
            'us' => 12.5,
            'uk' => 11.5,
            'eur' => 47,
            'cm' => 30.5,
        ],
        [
            'us' => 13,
            'uk' => 12,
            'eur' => 47.5,
            'cm' => 31,
        ],
        [
            'us' => 13.5,
            'uk' => 12.5,
            'eur' => 48,
            'cm' => 31.5,
        ],
        [
            'us' => 14,
            'uk' => 13,
            'eur' => 48.5,
            'cm' => 32,
        ],
        [
            'us' => 15,
            'uk' => 14,
            'eur' => 49.5,
            'cm' => 33,
        ],
        [
            'us' => 16,
            'uk' => 15,
            'eur' => 50.5,
            'cm' => 34,
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$sizes as $size) {
            Size::query()
                ->create($size);
        }
    }
}

