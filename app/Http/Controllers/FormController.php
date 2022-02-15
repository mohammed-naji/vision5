<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4Submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'phone' => 'required',
            'cv' => 'required|image|max:1024'
        ]);

        // dd($request->name);

        // dd($request->all());

        // $imgname = time() . $request->file('cv')->getClientOriginalName();

        $ex = $request->file('cv')->getClientOriginalExtension(); // fdfas.png => png
        $imgname = 'vision5_'.time().'_'.rand(0000000000, 9999999999).'.'.$ex;
        $request->file('cv')->move(public_path('uploads'), $imgname);
    }

    public function form5()
    {
        return view('forms.form5');
    }

    public function form5Submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'cv' => 'file|mimes:pdf|max:5200'
        ]);

        // Mohammed Ahmed
        // mohamed name => strtolowe
        // mohammed_name

        $newname = str_replace(' ', '_', strtolower($request->name));
        $ex = $request->file('cv')->getClientOriginalExtension();
        // cv_mohammed_ahmed_123456465.pdf

        // store uploaded file
        $cvname = 'cv_'.$newname.'_'.time().'.'.$ex;
        $request->file('cv')->move(public_path('uploads/cv'), $cvname);

        $data = $request->except('_token', 'cv', 'hoppies');
        $data['cv'] = $cvname;
        $data['hoppies'] = implode(', ', $request->hoppies);

        Mail::to('admin@info.com')->send(new ContactUsMail($data));

        // dd( $request->all() );
    }
}
