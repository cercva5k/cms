<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <title>Laravel</title>
    </head>
    @csrf
    <body class="antialiased">
        <div class="container">
            <div class="col-7 mx-auto my-auto bg-danger color-white py-5 text-center">
                @yield('content')
            </div>
        </div>
    </body>
</html>
