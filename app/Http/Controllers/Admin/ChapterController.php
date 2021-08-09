<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $items = Course::find($id);
        $courses = Course::where('id', '=', $id)->get();
        return view('pages.admin.course.chapter.create', compact('courses','items'));
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
        ]);

        Chapter::create($request->all());

        return redirect()->route('create.chapter', $id)->with('success', 'Tambah data berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = Course::find($id);
        $chapters = Chapter::with('course')->where('course_id', $id)->get();
        // dd($chapters->toArray());
        return view('pages.admin.course.chapter.index', compact('chapters','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::first();
        $items = Chapter::find($id);
        $chapters = Chapter::get();
        return view('pages.admin.course.chapter.edit', compact('courses','items', 'chapters'));
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
        $data = Chapter::findOrFail($id);
        $request->validate([
            'title' => 'required',
        ]);

        $data->update($request->all());

        return back()->with('success', 'Ubah data sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::whereId($id)->delete();
        return back()->with('success', 'Hapus data berhasil!');
    }
}
