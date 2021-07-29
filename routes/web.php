<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/class-video', function () {
    return view('pages.class-video');
});

Route::get('/all-class', function () {
    return view('pages.all-class');
});

Route::get('/class-categories', function () {
    return view('pages.class-categories');
});

Route::get('/class-map', function () {
    return view('pages.class-map');
});

Route::get('/map', function () {
    return view('pages.map');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});

Route::get('/settings', function () {
    return view('pages.admin.settings');
});

Route::get('/admin/class', function () {
    return view('pages.admin.class.index');
});

Route::get('/admin/class/create', function () {
    return view('pages.admin.class.create');
});

Route::get('/admin/class/edit', function () {
    return view('pages.admin.class.edit');
});

Route::get('/admin/category', function () {
    return view('pages.admin.category.index');
});

Route::get('/admin/category/create', function () {
    return view('pages.admin.category.create');
});

Route::get('/admin/category/edit', function () {
    return view('pages.admin.category.edit');
});

Route::get('/admin/user', function () {
    return view('pages.admin.user.index');
});

Route::get('/admin/user/create', function () {
    return view('pages.admin.user.create');
});

Route::get('/admin/user/edit', function () {
    return view('pages.admin.user.edit');
});

Route::get('/admin/review', function () {
    return view('pages.admin.review.index');
});

Route::get('/admin/review/create', function () {
    return view('pages.admin.review.create');
});

Route::get('/admin/review/edit', function () {
    return view('pages.admin.review.edit');
});

Route::get('/admin/class/chapter', function () {
    return view('pages.admin.class.chapter.index');
});

Route::get('/admin/class/chapter/create', function () {
    return view('pages.admin.class.chapter.create');
});

Route::get('/admin/class/chapter/edit', function () {
    return view('pages.admin.class.chapter.edit');
});

Route::get('/admin/class/chapter/video', function () {
    return view('pages.admin.class.chapter.video.index');
});

Route::get('/admin/class/chapter/video/create', function () {
    return view('pages.admin.class.chapter.video.create');
});

Route::get('/admin/class/chapter/video/edit', function () {
    return view('pages.admin.class.chapter.video.edit');
});