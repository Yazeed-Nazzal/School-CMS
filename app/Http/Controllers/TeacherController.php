<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::paginate(3);
        return view('Pages.Teacher.All-Teachers',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.Teacher.New-Teacher');
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
          'name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
          'number' => 'required|numeric',
          'address' => 'required|max:255|alpha_dash',
          'age' => 'required|max:50|numeric|',
          'salary' => 'required|max:10000|numeric|',
          'position' => 'required|max:255|alpha',
          'gender' => 'required|alpha',
       ]);
      Teacher::create($data);
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {

        return view('Pages.Teacher.Teacher',compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('Pages.Teacher.Edit-Teacher' , compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $data =  $request->validate([
            'name' => 'required|max:255',
            'number' => 'required',
            'address' => 'required|max:255',
            'age' => 'required|max:50|numeric|',
            'salary' => 'required|max:10000|numeric|',
            'position' => 'required|max:255|alpha',
            'gender' => 'required|alpha',
        ]);
        $teacher->update($data);
        return back()->with(['message' => "done"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
            $teacher->delete();
            return back();
    }
}
