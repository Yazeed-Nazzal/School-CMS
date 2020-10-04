<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with(array('grade'=>function ($q){
                $q->select('name','id');
        }))->paginate('3');
        return view('Pages.Student.All-Students',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $grades = Grade::with(array('students'=>function ($q) {
             $q->select('id','gradeID');
         }))->orderBy('name','DESC')->get();
        return view('Pages.Student.New-Student',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
           'name'=>'required|max:255',
           'age'=>'required|max:18',
            'number' => 'required|numeric',
           'address'=>'required',
           'gender'=>'required',
           'avatar'=>'required|file',
            'gradeID'=>'required'
        ]);
        $data['avatar'] = $data['avatar']->store('avatars');
        Student::create($data);
        return redirect('/students');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
       $grade = Grade::select('name','id')->get();
        return view('Pages.Student.Student',['student'=>$student,'grade'=>$grade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
       $gardes =  Grade::select('id','name','maxNumber')->get();
        return view('Pages.Student.Edit-Student',['student'=>$student,'grades'=>$gardes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name'=>'required|max:255',
            'age'=>'required|max:18',
            'number' => 'required|numeric',
            'address'=>'required',
            'gender'=>'required',
            'gradeID'=>'required',
            'avatar'=>'file'
        ]);
        if (\request('avatar'))
        {
            $data['avatar']=$data['avatar'] = $data['avatar']->store('avatars');
        }
        $student->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
    }
}
