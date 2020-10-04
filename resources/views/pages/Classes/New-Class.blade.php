@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <form method="post" action="/classes">
                    @csrf
                    <div class="form-group New-group">
                        <label for="Teacher">Teacher</label>
                        <select class="form-control" name="teacherID" id="teacherID">
                            <option>---</option>
                            @foreach($teachers as $teacher)
                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                            @endforeach
                        </select>
                        <p class="text-danger">
                            @error('teacherID')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group New-group">
                        <label for="Name">Class Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            aria-describedby="emailHelp"
                            value="{{old('name')}}">
                        <p class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group">
                        <label for="maxNumber">Student Number</label>
                        <input
                            type="text"
                            class="form-control"
                            id="maxNumber"
                            name="maxNumber"
                            aria-describedby="emailHelp"
                            value="{{old('max_number')}}">
                        <p class="text-danger">
                            @error('maxNumber')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group">
                       <button style="font-weight: 500 ;font-size:18px;" class="btn btn-costum">Add New Class</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-7">
                    <div class="New-Img">

                    </div>
            </div>

        </div>

    </div>
@stop
