<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Carbook - @yield('title')</title>
    @yield('styles')
</head>

<body>
    @include('layout.preloader')
    <div id="main-wrapper">
        @include('layout.adminheader')
        @include('layout.sidebar')
        @yield('content')
        @include('layout.adminfooter')
    </div>
    @yield('scripts')
</body>

</html>
