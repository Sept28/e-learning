<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\CourseVideoController;
use App\Http\Controllers\AllClassController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/login-auth', [MainController::class, 'loginAuth'])->name('auth.login');
Route::get('/register-auth', [MainController::class, 'registerAuth'])->name('auth.register');
Route::get('/all-class', [MainController::class, 'allClass'])->name('pages.all-class');
Route::get('/class-category', [MainController::class, 'classCategory'])->name('pages.class-category');
Route::get( '/class-map', [MainController::class, 'classMap'])->name('pages.class-map');
Route::get( '/class-video', [MainController::class, 'classVideo'])->name('pages.class-video')->middleware('auth');
Route::get('/map', [MainController::class, 'map'])->name('pages.map');


Route::post('/login-authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');

Route::get('/login-authenticate', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');

Route::post('/register-authenticate', [AuthController::class, 'regist'])->name('register.authenticate')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout.authenticate');

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });

Route::get('/settings', function () {
    return view('pages.admin.settings');
});

// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('course', CourseController::class);

        Route::get('course/chapter/create/{id}', [ChapterController::class, 'create'])->name('create.chapter');
        Route::post('course/chapter/store/{id}', [ChapterController::class, 'store'])->name('store.chapter');
        Route::resource('course/chapter', ChapterController::class);

        Route::get('course/course-video/create/{id}', [CourseVideoController::class, 'create'])->name('create.course-video');
        Route::post('course/course-video/store/{id}', [CourseVideoController::class, 'store'])->name('store.course-video');
        Route::resource('course/course-video', CourseVideoController::class);
        
        Route::resource('categories', CategoryController::class);
        Route::resource('user', UserController::class);
        Route::resource('review', ReviewController::class);
    });
    
    Auth::routes();