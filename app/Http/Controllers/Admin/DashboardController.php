<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\Review;

class DashboardController extends Controller
{
    public function index () 
    {
    $users = User::count();
    $categories = Category::count();
    $course_videos = CourseVideo::count();
    $chapters = Chapter::count();
    $courses = Course::count();
    $reviews = Review::count();
    return view('pages.admin.dashboard', [
        'users' => $users,
        'categories' => $categories,
        'course_videos' => $course_videos,
        'chapters' => $chapters,
        'courses' => $courses,
        'reviews' => $reviews
    ]);
    }
}
