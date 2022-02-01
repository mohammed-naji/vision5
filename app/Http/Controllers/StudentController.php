<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return 'portal page';
    }

    public function student($st)
    {
        return 'Welcome ' . $st;
    }
}
