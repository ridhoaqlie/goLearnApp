<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses', [
            "title" => "Courses",
            // "courses" => Course::all()
        ]);
    }

    public function show($slug)
    {
        return view('courses', [
            "title" => "Courses"
        ]);
    }
}
