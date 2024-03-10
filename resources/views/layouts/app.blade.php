<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <title>Orestis Portfolio</title>

    <meta name="title" content="Portfolio of Orestis Antonopoulos">
    <meta name="description" content="This is the portfolio website of a Jr. Web Dev, Orestis Antonopoulos">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://OrestisAntonopoulos.com">
    <meta property="og:title" content="Orestis Antonopoulos Portfolio">
    <meta property="og:description" content="In this portfolio site you can see my projects, skills, contact information and my Cv along with some personal ranting. Hiring me will bestow good fortune upon you!">
    <meta property="og:image" content="{{ asset('images/mahface.webp') }}">


</head>
<body style="font-family: 'Roboto', sans-serif" class="flex w-full justify-center items-center relative" style="height:100vh;">

@include('layouts.bganimation')

<div class="absolute flex w-full justify-center items-center" 
style="top:0; height:calc(100vh - env(safe-area-inset-bottom) - env(safe-area-inset-top)); padding:10px;">
    <div class="container relative w-full sm:w-[620px] h-full">
        @yield('header')
        @include('4sections')
        @yield('content')
        
    </div>
</div>
@yield('scripts')
</body>
</html>