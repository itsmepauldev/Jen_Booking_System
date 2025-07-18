<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="text-center space-y-8 px-4">
        <h1 class="text-4xl font-bold">Welcome to the Booking System</h1>
        <p class="text-gray-400">Please login or register to continue.</p>

        <div class="space-x-4">
            <a href="{{ route('login') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-medium">Login</a>

            <a href="{{ route('register') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-medium">Register</a>
        </div>
    </div>
</body>

</html>