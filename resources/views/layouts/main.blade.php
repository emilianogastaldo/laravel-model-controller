<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="mt-5 ms-5">@yield('header', '')</h1>
    <main>
        @yield('main-content')
        
    </main>
</body>
</html>
