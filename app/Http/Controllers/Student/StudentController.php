<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function index()
    {
        return view("student.home");
    }

    public function profile()
    {
        return view("student.profile");
    }
}
