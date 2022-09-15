<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Super App')</title>

    @section('stylesheet')

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
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
