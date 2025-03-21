<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
     <!-- estilos -->
     {{-- @vite('resources/css/app.css') --}}
     {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
</head>
<body>
    <!-- header -->
    <header>
        <h1>JeannFacts</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">home</a>
                @dump(request()->routeIs('home'))
                </li>
                <li><a href="{{route('cursos.index')}}">Cursos</a>
                @dump(request()->routeIs('cursos.index'))
                </li>
                <li><a href="{{route('nosotros')}}">Nosotros</a>
                @dump(request()->routeIs('nosotros'))
                </li>
            </ul>
        </nav>
    </header>
     <!-- nav -->
    @yield('content')

    <!-- footer -->

    <!-- script -->
</body>
</html>