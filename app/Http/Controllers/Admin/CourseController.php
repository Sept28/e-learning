<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use App\Models\Chapter;
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
        $courses = Course::get();
        return view('pages.admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('pages.admin.course.create', compact('categories'));
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
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image_file' => 'required'
        ]);

        $image_file = $this->uploadImage($request->file('image_file'));

        $request->merge([
            'image' => $image_file
        ]);

        Course::create($request->all());

        return back()->with('success', 'Posting data succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::findOrFail($id);
        $categories = Category::get();
        return view('pages.admin.course.edit', compact('courses', 'categories'));
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
        $data = Course::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image_file' => 'required'
        ]);

        if ($request->file('image_file') == null) {
            $request->merge([
                'image' => $data->image
            ]);
        } else {
            $this->removeImage($data->image);
            $image_file = $this->uploadImage($request->image_file);
            $request->merge([
                'image' => $image_file
            ]);
        }
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
        Course::whereId($id)->delete();
        Chapter::where('course_id', '=', $id)->delete();

        return back()->with('success', 'Hapus data sukses');
    }

    public function uploadImage($image)
    {
        $new_name_image = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload_image'), $new_name_image);
        return $new_name_image;
    }

    //unlink buat menghapus file
    public function removeImage($image)
    {
        if (file_exists('upload_image/' . $image)) {
            unlink('upload_image/' . $image);
        }
    }
}
