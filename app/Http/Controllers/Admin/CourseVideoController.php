<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = CourseVideo::get();
        $chapters = Chapter::find();
        return view('pages.admin.course.chapter.video.index', compact('videos','chapters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $reviews = Review::get();
        $users = User::get();
        $videos = CourseVideo::get();
        $chapters = Chapter::find($id);
        $items = Chapter::where('id', '=', $id)->get();
        return view('pages.admin.course.chapter.video.create', compact('reviews', 'users', 'videos', 'chapters', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'chapter_id' => 'required',
            'video' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'review_id' => 'required',
        ]);

        CourseVideo::create($request->all());

        return redirect()->route('create.course-video', $id)->with('success', 'Tambah data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapters = Chapter::find($id);
        $videos = CourseVideo::where('chapter_id', '=', $id)->get();
        return view('pages.admin.course.chapter.video.index', compact('videos', 'chapters'));
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
        //
    }
}
