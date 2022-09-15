<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Super App')</title>

    @section('stylesheet')

        <link rel="stylesheet" href="{{ asset('Index.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    @show

</head>

<body class="antialiased">
@section('header')
    @include('includes.header')
@show

<div class="container">
    @yield('content')
</div>

@section('footer')
    @include('includes.footer')
@show
</body>
</html>
