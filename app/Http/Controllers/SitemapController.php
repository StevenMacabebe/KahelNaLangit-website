<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $pages = [
            ['loc' => route('home'), 'priority' => '1.0'],
            ['loc' => route('about'), 'priority' => '0.8'],
            ['loc' => route('partnerships'), 'priority' => '0.8'],
            ['loc' => route('donate'), 'priority' => '0.9'],
            ['loc' => route('contact'), 'priority' => '0.7'],
            ['loc' => route('login'), 'priority' => '0.5'],
            ['loc' => route('register'), 'priority' => '0.5'],
        ];

        return response()->view('sitemap', ['pages' => $pages])->header('Content-Type', 'text/xml');
    }
}