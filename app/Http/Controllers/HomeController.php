<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $studentsNum = Student::select('id')->get()->count();
        $gradesNum = Grade::select('id')->get()->count();
        $teachersNum = Teacher::select('id')->get()->count();


        return view('home',['studentsNum'=>$studentsNum,'gradesNum'=>$gradesNum,'teachersNum'=>$teachersNum]);
    }
}
