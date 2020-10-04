@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <form method="post" action="/teachers/{{$teacher->id}}" autocomplete="off">
                    @csrf
                    @method('put')
                    <div class="form-group  New-group w-75">
                        <label for="StudentName">Teacher Name</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="Name"
                            name="name"
                            aria-describedby="emailHelp"
                            value="{{ $teacher->name }}">

                        <p class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="StudentPhone">Phone Number</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="Phone"
                            name="number"
                            aria-describedby="emailHelp"
                            value="{{ $teacher->number }}">
                        <p class="text-danger">
                            @error('number')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="StudentAddress">Address</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="Address"
                            name="address"
                            aria-describedby="emailHelp"
                            value="{{ $teacher->address}}">
                        <p class="text-danger">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="Age">Age</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="Age"
                            name="age"
                            aria-describedby="emailHelp"
                            value="{{ $teacher->age}}">
                        <p class="text-danger">
                            @error('age')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="salary">Salary</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="Salary"
                            name="salary"
                            aria-describedby="emailHelp" value="{{ $teacher->salary}}">

                        <p class="text-danger">
                            @error('salary')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="Position">Position</label>
                        <input
                            type="text"
                            autocomplete="off"
                            class="form-control"
                            id="Position"
                            name="position"
                            aria-describedby="emailHelp"
                            value="{{ $teacher->position }}">

                        <p class="text-danger">
                            @error('position')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group w-75">
                        <label for="Gander">Gender</label>
                        <select class="form-control" name="gender" id="gander"  value="{{ old('gender') }}">
                            <option>--</option>
                            <option {{ $teacher->gender === "Male"? 'selected':''  }}>Male</option>
                            <option {{ $teacher->gender === "Female"? 'selected':''  }}>Female</option>
                        </select>
                        <p class="text-danger">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </p>
                    </div>
                    <div class="form-group  New-group">
                        <button style="font-weight: 500 ;font-size:18px;" class="btn btn-costum">Edit Teacher</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-7">
                <div class="Teacher-Img">

                </div>
            </div>

        </div>
    </div>
@stop
