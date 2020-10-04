<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use PhpParser\Builder\Class_;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::with(array('teacher'=>function ($q){
            $q->select('id','name');
        }))->paginate(3);
        return view('pages.Classes.All-Classes' ,compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $teachers = Teacher::select('id','name')->where('has_grade','=','0')->get();
        return view('pages.Classes.New-Class',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data =  $request->validate([
           'name'=>'required|max:2',
           'teacherID'=> "required",
            'maxNumber'=> 'required|max:25'
        ]);
        Teacher::where('id','=',$request->teacherID)->update(['has_grade'=>'1']);
        Grade::create($data);
        return redirect(route('grades'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
         $teacher = Teacher::select('id','name')
                            ->where('id','=',$grade->teacherID)->get();
         $students = Student::select('id','name','gender')->where('gradeID','=',$grade->id)->get();
         return view('pages.Classes.Class-Page' ,['grade'=>$grade,'teacher'=>$teacher,'students'=>$students]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {

        $teachers = Teacher::select('id','name')->where('has_grade','=','0')->orWhere('id','=',$grade->teacherID)->get();
        return view('pages.Classes.Edit-Class',['grade'=>$grade,'teachers'=>$teachers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $data =  $request->validate([
            'name'=>'required|max:2',
            'teacherID'=> "required",
            'maxNumber'=> 'required|max:25'
        ]);
        Teacher::where('id','=',$request->oldTeacher)->update(['has_grade'=>'0']);
        Teacher::where('id','=',$request->teacherID)->update(['has_grade'=>'1']);
        $grade->update($data);
        return redirect(route('grades'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        Teacher::where('id','=',$grade->teacherID)->update(['has_grade'=>'0']);
        return  redirect(route('grades'));

    }
}
