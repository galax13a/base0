<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-app.base.ComHeaderbody></x-app.base.ComHeaderbody>
</head>
<body>
    <x-app.base.navegator></x-app.base.navegator>
<div id="app">
        @yield('content')
</div>
<x-app.base.ComLivescript></x-app.base.ComLivescript>
@yield('thema_script')
</body>
</html>
