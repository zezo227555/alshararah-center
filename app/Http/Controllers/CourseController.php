<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(perPage: 15);
        return view('course.index', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $ecxtntion = $file->getClientOriginalExtension();
        $filename = time().'.'.$ecxtntion;
        $file->move('assets/img/course', $filename);

        Course::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'details' => $request->details,
            'image' => $filename,
        ]);

        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('course.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'details' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg',
            ]);
            unlink("assets/img/course/$course->image");
            $file = $request->file('image');
            $ecxtntion = $file->getClientOriginalExtension();
            $filename = time().'.'.$ecxtntion;
            $file->move('assets/img/course', $filename);

            $course->update([
                'image' => $filename,
            ]);
        }

        $course->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'details' => $request->details,

        ]);

        return redirect()->route('course.show', $course->id)->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        unlink("assets/img/course/$course->image");
        $course->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
