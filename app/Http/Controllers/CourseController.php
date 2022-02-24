<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Rules\MaxWordsRule;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counts = 5;

        if( request()->has('items_count') ) {
            $counts = request()->items_count;
        }

        $courses = Course::orderBy('id', 'desc')->paginate($counts);

        if(request()->has('name')) {
            $courses = Course::orderBy('id', 'desc')->where('name', 'like', '%'. request()->name .'%')->paginate($counts);
        }

        // $courses = Course::latest('id')->get();
        // dd($courses);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            'description' => [new MaxWordsRule(500)]
        ]);

        // upload file
        $imgname = 'course_'.time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);

        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imgname,
            'description' => $request->description,
        ]);

        return redirect()->route('courses.index')->with('msg', 'Course added successfully')->with('type', 'success');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Showwwww';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index')->with('msg', 'Course deleted successfully')->with('type', 'danger');
    }
}
