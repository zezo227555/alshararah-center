<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::paginate(15);
        return view('news.index', ['news' => $news]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:png,jpg',
        ]);

        $file = $request->file('image');
        $ecxtntion = $file->getClientOriginalExtension();
        $filename = time().'.'.$ecxtntion;
        $file->move('assets/img/news', $filename);

        News::create([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $filename,
        ]);

        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit', ['new' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required',
        ]);

        if($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg',
            ]);

            unlink("assets/img/news/$news->image");
            $file = $request->file('image');
            $ecxtntion = $file->getClientOriginalExtension();
            $filename = time().'.'.$ecxtntion;
            $file->move('assets/img/news', $filename);

            $news->update([
                'image' => $filename,
            ]);
        }

        $news->update([
            'title' => $request->title,
            'details' => $request->details,
        ]);

        return redirect()->route('news.show', $news->id)->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        unlink("assets/img/news/$news->image");
        $news->delete();
        
        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
