@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <form method="post" action="/students/{{ $student->id }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group  New-group w-75">
                        <label for="StudentName">Student Name</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="name"
                            name="name"
                            value="{{ $student->name }}"
                            aria-describedby="emailHelp">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="StudentPhone">Phone Number</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="number"
                            name="number"
                            value="{{ $student->number }}"
                            aria-describedby="emailHelp">
                        @error('number')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="StudentAddress">Address</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="address"
                            name="address"
                            value="{{ $student->address }}"
                            aria-describedby="emailHelp">
                        @error('address')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="Age">Age</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="age"
                            name="age"
                            value="{{ $student->age }}"
                            aria-describedby="emailHelp">
                        @error('age')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="Gander">Gender</label>
                        <select class="form-control" name="gender" id="gander">
                            <option>--</option>
                            <option {{$student->gender==='male'?'selected':''}} value="male">Male</option>
                            <option  {{$student->gender==='female'?'selected':''}} value="female">Female</option>
                        </select>
                        @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="Class">Class</label>
                        <select class="form-control" name="gradeID" id="grade">
                            @foreach($grades as $grade)
                                @if ($grade->maxNumber > $grade->students->count())
                                    <option {{$grade->id===$student->gradeID?'selected':''}} value="{{$grade->id}}">{{ $grade->name  }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('gradeID')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group  New-group mb-4  w-75">
                        <label for="Class">Student Pitcher</label>
                        <div class="custom-file">
                            <input
                                name="avatar"
                                type="file"
                                class="custom-file-input"
                                id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                    @error('avatar')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group  New-group">
                        <button style="font-weight: 500 ;font-size:18px;" class="btn btn-costum">Add</button>
                    </div>

                </form>
            </div>
            <div class="col-12 col-md-7">
                <div class="Student-Img" style="background-image: url('/storage/{{$student->avatar}}')">

                </div>
            </div>

        </div>
    </div>
@stop
