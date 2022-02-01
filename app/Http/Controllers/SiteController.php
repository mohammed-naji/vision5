<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {



        return view('index');
    }

    public function about()
    {
        return 'about page';
    }

    public function contact()
    {
        return 'contact page';
    }

    public function contact2()
    {
        return 'contact2 page';
    }

    public function contact3()
    {
        return 'contact3 page';
    }

    public function contact4()
    {
        return 'contact4 page';
    }


}
