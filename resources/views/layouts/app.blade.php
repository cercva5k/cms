<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Auth') }}</title>

    <script src="{{ asset('js/admin/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="login">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
