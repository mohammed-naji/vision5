<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\Product;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelationController extends Controller
{
    public function one_to_one()
    {
        // $user = User::find(2);

        // dd($user->insurance);

        $insurance = Insurance::find(1);

        dd($insurance->user);
    }

    public function one_to_many()
    {

        // $user = User::find(2);

        // dd($user->products);


        // $product = Product::find(3);

        // return "Product " . $product->name . " <br> Author : " . $product->user->name;

        // dd($product->user);

        return view('one_to_many');
    }

    public function one_to_many_submit(Request $request)
    {
        $user = User::find(2);
        // dd($user);
        // $user->products()->create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        // ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'user_id' => $user->id
        ]);


    }

    public function many_to_many()
    {

        // $std = Student::find(2);

        // dd($std->subjects);

        // $subject = Subject::find(2);

        // dd($subject->students);

        return 'Done';
    }

    public function register_subjects()
    {
        $std = Student::find(2);
        $subjects = Subject::all();

        // dd( $std->subjects );
        $std_sub = DB::table('abc')->where('student_id', $std->id)->get()->pluck('subject_id')->toArray();

        // dd($std_sub);

        return view('register_subjects', compact('std', 'subjects', 'std_sub'));
    }

    public function register_subjects_submit(Request $request)
    {
        // dd($request->all());
        $std = Student::find(2);

        // $std->subjects()->attach( $request->subjects );
        // $std->subjects()->detach
        $std->subjects()->sync( $request->subjects );

        // foreach( $request->subjects as $sub ) {

        //     DB::table('abc')->insert([
        //         'subject_id' => $sub,
        //         'student_id' => $user->id
        //     ]);

        // }

    }


}
