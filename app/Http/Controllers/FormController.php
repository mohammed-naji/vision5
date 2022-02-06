<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1Submit(Request $request)
    {
        return $request->all();
    }
}
