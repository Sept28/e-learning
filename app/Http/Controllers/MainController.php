<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.home');
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
        return view('pages.all-class');
    }

    public function classCategory()
    {
        return view('pages.class-categories');
    }

    public function classMap()
    {
        return view('pages.class-map');
    }

    public function classVideo()
    {
        return view('pages.class-video');
    }

    public function map()
    {
        return view('pages.map');
    }
}
