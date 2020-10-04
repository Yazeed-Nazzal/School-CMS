@extends('layouts.app')
@section('content')
   <div class="Img-Page">
       <div class="container">
           <h1 class="text-center header " style="color: white">Classes</h1>
           <div class="Records">
               <table class="table">
                   <thead>
                   <tr>

                       <th scope="col">Class ID</th>
                       <th scope="col">Class</th>
                       <th scope="col">Teacher</th>
                       <th scope="col">Max Student Number</th>
                       <th scope="col">Status</th>
                       <th scope="col">Function</th>

                   </tr>
                   </thead>
                   <tbody>
                        @foreach($grades as $grade)
                            <tr>
                                <td><a style="color: #557A96" href="classes/{{ $grade->id }}">{{ $grade->id }}</a></td>
                                <td>{{ $grade->name }}</td>
                                <td><a style="color: #557A96" href="teachers/{{ $grade->teacher->id }}">{{$grade->teacher->name}}</a></td>
                                <td>{{ $grade->maxNumber }}</td>
                                <td>available</td>
                                <td>
                                    <button class="btn btn-costum"><a href="classes/{{ $grade->id }}/edit">Edit</a></button>
                                    <form  style="display: inline-block" method="post" action="classes/{{ $grade->id}}/delete">
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
