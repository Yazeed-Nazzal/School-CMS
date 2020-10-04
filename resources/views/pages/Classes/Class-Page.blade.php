@extends('layouts.app')
@section('content')
    <div class="Img-Page">
        <div class="container">
            <h1 class="mb-4 text-center">Class Info</h1>
            <table class="table" style="">
                <thead>
                <tr>
                    <th scope="col">Class ID</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Student Number</th>
                    <th scope="col"> Max Student Number</th>
                    <th>Status</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $grade->id }}</td>
                    <td><a style="color: #557A96" href="/teachers/{{ $teacher[0]->id }}">{{ $teacher[0]->name }}</a></td>
                    <td>10</td>
                    <td>{{ $grade->maxNumber }}</td>
                    <td>Available</td>
                </tr>

                </tbody>
            </table>
            <button class="btn btn-costum2" style="color: #557A96"><a  style="color: #557A96" href="/classes/{{ $grade->id }}/edit">Edit</a></button>
            <button class="btn btn-costum2 bg-danger" style="color: #fff"><a  style="color: white" href="/classes/{{ $grade->id }}/delete">delete</a></button>
        </div>

    </div>
    <div class="Class-Student">
        <div class="container">
            <h1 class="text-center mb-5" style="color: #557A96">Student in Clsss</h1>
            <table class="table  mx-auto ">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">ID</th>
                    <th scope="col">gender</th>
                </tr>
                </thead>
                <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td><a style="color: #557A96" href="/students/{{$student->id}}">{{$student->id}}</a></td>
                                <td>{{$student->gender}}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

    </div>
@stop
