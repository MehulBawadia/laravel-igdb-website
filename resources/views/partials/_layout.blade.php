<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('pageTitle')
    <meta name="theme-color" content="#a5b4fc">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    @yield('pageStyles')
</head>
<body class="bg-gray-900 tracking-widest text-white antialiased">
    @include('partials._header')

    @yield('content')

    @yield('pageScripts')
</body>
</html>
