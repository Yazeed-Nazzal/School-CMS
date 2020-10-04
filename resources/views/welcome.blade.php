<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <title>Laravel</title>


    </head>
    <body class="antialiased">
    @if (Route::has('login'))
        <div class="pr-5 pt-3 d-flex justify-content-end welcome-nav" style="font-size: 22px">
            @auth
                <a  href="{{ url('/home') }}" class="text-sm  underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
            @endif
        </div>
    @endif
        <div class="container">
            <div class="text-center mt-3 mb-5">
                    <h1 style="color: #7395AE;font-weight: 700">Welcome To School Cms</h1>
            </div>
            <div class="Welcome">
            </div>

        </div>


    </body>
</html>
