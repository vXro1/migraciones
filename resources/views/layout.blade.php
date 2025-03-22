<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        <h1>Mi aplicación Laravel</h1>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Derechos reservados &copy; 2025</p>
    </footer>
</body>
</html>
