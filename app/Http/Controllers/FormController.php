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
        $name = $request->name;
        $email = $request->email;
        // if(!$name) {
        //     $name = 'Please Enter value';
        // }

        // $data = $request->all();
        // $data = $request->except('_token');
        // $data = $request->only('name', 'email');

        // dd($request->all());

        // $name = $request->input('name', 'Emptyyyyyyyy');
        // $email = $request->input('email', 'Noooooo');

        // dd($data);

        return "Welcome, $name your email is $email";
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2Submit(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        // $dob = $request->dob;

        list($month, $day, $year) = explode('/', $request->dob);

        // $album = ['ffff.png', 'eeeee.jpg', 'qqqq.png'];

        // dd( implode(',', $album) );

        return view('forms.form2data', compact('name', 'email', 'month', 'day', 'year'));

    }


    public function form3()
    {
        return view('forms.form3');
    }

    public function form3Submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'min:5'],
            'email' => 'required|email:rfc,dns',
        ]);

        dd($request->all());
    }
}
