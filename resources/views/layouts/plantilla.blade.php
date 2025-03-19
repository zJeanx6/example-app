<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
     <!-- estilos -->
     @vite('resources/css/app.css')
     {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
</head>
<body>
    <!-- header -->
     <!-- nav -->
    @yield('content')

    <!-- footer -->

    <!-- script -->
</body>
</html>