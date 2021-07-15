<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Post Site</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <header>
        <div class="menu">
            <a href="{{ route('home') }}">
                <h1>POSTER's</h1>
            </a>
        </div>
    </header>
    @yield('content')
</body>

</html>
