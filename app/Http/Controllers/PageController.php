<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Teacher;


class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function slides()
    {
        return view('pages.slides');
    }
    public function notes()
    {
        return view('pages.notes');
    }
    public function books()
    {
        return view('pages.books');
    }
    public function course()
    {
        return view('pages.courses');
    }
    public function upload()
    {
        return view('pages.upload');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function studentSignup()
    {
        return view('auth.student');
    }
    public function teacherSignup()
    {
        return view('auth.teacher');
    }


    public function studentCreate(Request $request)
    {
        return view('pages.index');
    }
    public function teacherCreate()
    {
        return view('pages.index');
    }
}
