<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    protected static $teams = [
        [
            'name' => 'Made Agustha I.S.',
            'image' => 'made.jpg'
        ],
        [
            'name' => 'Muhammad Fathariq Dimas Octaviandra',
            'image' => 'fadim.png'
        ],
        [
            'name' => 'Velencia',
            'image' => 'velencia.png'
        ]
    ];

    protected static $sections = [
        [
            'label' => 'Our Story',
            'title' => 'Who we are',
            'content' => 'We are a group of students that are required to build a final project for our Web Programming class. We decide on an idea to build an ecommerce website that focus on shoes as products for our final project.',
            'image' => '/img/about/who-we-are.png'
        ],
        [
            'label' => 'Our Motivation',
            'title' => 'Empower youth culture',
            'content' => 'We want to inspire youth and empower youth culture, by fueling a shared passion for self-expression and creating unrivaled experiences at the heart of the global sneaker community.',
            'image' => '/img/about/motivation.jpg'

        ]
    ];

    public function index()
    {
        return view('about', [
            'teams' => self::$teams,
            'sections' => collect(self::$sections)
        ]);
    }
}
