<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index()
    {
        $title = 'About Us From Controller';
        $body = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore assumenda beatae, ipsam numquam voluptates pariatur culpa nisi exercitationem vero tenetur tempora labore nemo, voluptate maiores sequi, modi dolor voluptas quo!';

        // return view('index')->with('title', $title)->with('body', $body);
        // return view('index', compact('title', 'body'));
        return view('index', [
            'about_title' => $title,
            'about_body' => $body
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
}
