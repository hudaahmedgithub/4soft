<?php

namespace App\Http\Controllers\Backend;

use App\Course;
use App\User;
use App\Video;
use App\Language;
use App\Level;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
   
    public function index()
    {
        $courses = Course::all();
		$videos= Video::all();
		$languages=Language::all();
		$levels=Level::all();
        return view('backend.courses.index', compact('courses','videos','languages','levels'));
    }

	public function create()
    {
		$videos= Video::all();
		$languages=Language::all();
		$levels=Level::all();
        return view('backend.courses.create', compact('videos','languages','levels'));
    }
    public function store(Request $request,Course $course)
    {
     
		$course->name=$request->name;
		$course->description=$request->description;
		$course->price=$request->price;
		$course->hours=$request->hours;
		$course->duration=$request->duration;
		$course->level_id=$request->level_id;
		$course->video_id=$request->video_id;
		$course->language_id=$request->language_id;
		$course->user_id=Auth::user()->id;
		$course->save();
        session()->flash('success', 'Course Created Successfully');
        return back();
    }

 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
        $course = Course::findOrFail($id);
        $videos= Video::all();
		$languages=Language::all();
		$levels=Level::all();
        return view('backend.courses.edit', compact('course','videos','languages','levels'));
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
        $course = Course::findOrFail($id);

        $course->update($request->all());

        session()->flash('success', 'Course Update Successfully');
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        session()->flash('success', 'Course Deleted Successfully');
        return redirect()->route('course.index');
    }
}
