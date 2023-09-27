<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- ultima version  --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- otra version --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    {{-- Version 1.9 --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    {{-- @vite('resources/css/app.css') --}}
    <title>@yield('title')</title>
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
@include('layouts.partials.header')
<body>
@yield('content')
</body>
@include('layouts.partials.footer')
</html>