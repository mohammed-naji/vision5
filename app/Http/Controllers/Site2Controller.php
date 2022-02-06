<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index()
    {
        $title = 'Mohammed Naji';
        $subtitle = 'This is new wensite';
        return view('site2.index', compact('title', 'subtitle'));

        // return view('site2.master');
    }

    public function about()
    {
        return view('site2.about');
    }

    public function contact()
    {
        return view('site2.contact');
    }

    public function post($title)
    {
        return view('site2.post')->with('title', $title);
    }
}
