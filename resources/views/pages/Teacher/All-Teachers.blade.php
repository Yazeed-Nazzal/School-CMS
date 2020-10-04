@extends('layouts.app')
@section('content')

    <div class="Img-Page">
        <div class="container">
            <h1 class="text-center header " style="color: white">Teachers</h1>
            <div class="Records">
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
                        <th scope="col">Gender</th>
                        <th scope="col">Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher )
                            <tr>
                                <td><a style="color: #557A96" href="teachers/{{ $teacher->id }}">{{ $teacher->id }}</a></td>
                                <td>1</td>
                                <td>{{ $teacher->name }}</td>
                                <td style="width: 170px">{{ $teacher->number }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->age }}</td>
                                <td>{{ $teacher->salary }}</td>
                                <td>{{ $teacher->position }}</td>
                                <td>{{ $teacher->gender }}</td>
                                <td style="width: 200px">
                                    <button class="btn btn-costum"><a href="teachers/{{$teacher->id}}/edit">Edit</a></button>
                                        <form  style="display: inline-block" method="post" action="teachers/{{ $teacher->id}}/delete">
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
            <div class="mx-auto d-flex justify-content-center">
                {{ $teachers->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>


@stop
