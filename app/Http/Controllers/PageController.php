<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Teacher;
use App\Content;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['login','studentSignup','teacherSignup']);
    }


    public function index()
    {

        $data=Content::all();
        return view('pages.index',[
            'data'=>$data
        ]);
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
        if(auth()->guest() )abort(403);
        return view('pages.index');
    }
    public function teacherCreate()
    {
        if(auth()->guest() )abort(403);
        return view('pages.index');
    }
}
