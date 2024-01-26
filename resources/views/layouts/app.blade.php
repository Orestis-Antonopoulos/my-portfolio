<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="font-family: 'Roboto', sans-serif" class="flex w-full h-full justify-center items-center">

@include('layouts.bganimation')

<div class="absolute flex w-full h-full justify-center items-center p-[10px]">
    <div class="container relative w-full h-full">
        @yield('header')
        @include('4sections')
        @yield('content')
        
    </div>
</div>
</body>
</html>

@yield('scripts')
