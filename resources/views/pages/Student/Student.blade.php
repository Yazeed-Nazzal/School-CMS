@extends('layouts.app')
@section('content')
    <div class="Img-Page">
        <div class="container">
            <h1 class="mb-4 text-center">Student Info</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class ID</th>
                    <th scope="col">Phone Num</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">gender</th>
                    <th scope="col">Edit</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a style="color: #557A96" href="/students/{{$student->id}}">{{$student->id}}</a></td>
                    <td>{{$student->name}}</td>
                    <td><a style="color: #557A96" href="/classes/{{$grade[0]->id}}">{{$grade[0]->name}}</a></td>
                    <td>{{$student->number}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}</td>
                    <td style="width: 200px">
                        <button class="btn btn-costum"><a href="/students/{{$student->id}}/edit">Edit</a></button>
                        <form  style="display: inline-block" method="post" action="/students/{{ $student->id}}/delete">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
@stop
