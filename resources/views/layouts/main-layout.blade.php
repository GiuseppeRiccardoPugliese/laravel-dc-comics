<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite("resources/js/app.js")

    @yield('head')
</head>
<body>
    <div class="text-center">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
</body>
</html>
