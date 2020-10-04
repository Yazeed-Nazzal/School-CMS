@extends('layouts.app')
@section('content')
    <div class="Img-Page">
        <div class="container">
            <h1 class="mb-4 text-center">Teacher Info</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Teacher ID</th>
                    <th scope="col">Class ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Num</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Position</th>
                    <th scope="col">Edit</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a style="color: #557A96" href="students/{{ $teacher->id }}">{{ $teacher->id}}</a></td>
                    <td>1</td>
                    <td>{{ $teacher->name}}</td>
                    <td>{{ $teacher->number}}</td>
                    <td>{{ $teacher->address}}</td>
                    <td>{{ $teacher->age}}</td>
                    <td>{{ $teacher->salary}}</td>
                    <td>{{ $teacher->position}}</td>
                    <td style="width: 200px">
                        <button class="btn btn-costum"><a href="/teachers/{{$teacher->id}}/edit">Edit</a></button>
                        <form  style="display: inline-block" method="post" action="/teachers/{{ $teacher->id}}/delete">
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
