<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
       return view('admin-pages.dashboard');
    }

    public function students()
    {
        return view('admin-pages.students');
    }

    public function teachers()
    {
        return view('admin-pages.teachers');
    }

    public function parents()
    {
        return view('admin-pages.parents');
    }
}