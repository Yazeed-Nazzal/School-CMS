@extends('layouts.app')
@section('content')
    <div class="Img-Page">
        <div class="container">
            <h1 class="text-center header " style="color: white">Students</h1>
            <div class="Records">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Class </th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Num</th>
                        <th scope="col">Address</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td><a style="color: #557A96" href="students/{{$student->id}}">{{ $student->id }}</a></td>
                                <td><a style="color: #557A96" href="classes/{{ $student->grade->id }}">{{$student->grade->name}}</a></td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->number }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->gender }}</td>
                                <td style="width: 200px">
                                    <button class="btn btn-costum"><a href="students/{{$student->id}}/edit">Edit</a></button>
                                    <form  style="display: inline-block" method="post" action="students/{{ $student->id}}/delete">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
