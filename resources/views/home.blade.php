@extends('layouts.app')
@section('home')
    body {
    background-color: #fff;
    }

@stop
@section('content')
    <div class="Home" style=" position:relative; z-index: 100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="Statistics">
                                <h4>Total Class Number</h4>
                                <p>{{$gradesNum}}</p>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="Statistics">
                                <h4>Total Student Number</h4>
                                <p>{{$studentsNum}}</p>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="Statistics">
                                <h4>Total Teacher Number</h4>
                                <p>{{$teachersNum}}</p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-7">
                    <div class="Home-Img">

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- particles.js container -->
    <div id="particles-js"></div> <!-- stats - count particles --><!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
@endsection
