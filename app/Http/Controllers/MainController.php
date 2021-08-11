<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::take('3')->get();
        $courses   = Course::with('videos')->take(3)->get();
        return view('pages.home', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }

    public function loginAuth()
    {
        return view('auth.login');
    }

    public function registerAuth()
    {
        return view('auth.register');
    }

    public function allClass()
    {
        $categories = Category::take('4')->get();
        $courses   = Course::with('videos')->take(4)->get();
        return view('pages.all-class', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }

    public function classCategory()
    {
        $categories = Category::take('4')->get();
        $courses   = Course::with('videos')->take(4)->get();
        return view('pages.class-categories', [
            'categories' => $categories,
            'courses' => $courses
        ]);
    }

    public function classMap()
    {
        $courses   = Course::with('videos')->take(4)->get();
        $categories = Category::take('4')->get();
        return view('pages.class-map', [
            'courses' => $courses,
            'categories' => $categories
        ]);
    }

    public function classVideo()
    {
        return view('pages.class-video');
    }

    public function map()
    {
        $categories = Category::take('4')->get();
        return view('pages.map', [
            'categories' => $categories
        ]);
    }
}
