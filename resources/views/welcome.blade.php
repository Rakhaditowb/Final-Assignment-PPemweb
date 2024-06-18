<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Assignment</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="flex justify-center items-center flex-col h-screen">
    <header>
        <h1 class="text-4xl font-bold mb-8">Final Assignment Praktikum Pemrograman Web</h1>
    </header>
    @if (Route::has('login'))
    <nav class="flex flex-col items-center">
        @auth
        <a href="{{ url('/dashboard') }}" class="mb-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition-colors">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="mb-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition-colors">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition-colors">Register</a>
        @endif
        @endauth
    </nav>
    @endif
</body>
</html>
