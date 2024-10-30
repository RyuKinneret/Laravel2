<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/inicio.css', 'resources/js/app.js']) 
    <title>Inicio - Bienvenidos</title>
</head>
<body>
    <!-- Video de fondo -->
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Bienvenidos a nuestro sistema de listado</h1>
        </header>
        <hr>
        <p>Explora la lista completa de autos y clientes disponibles en nuestro sistema.</p>

        <!-- Enlaces a Autos y Clientes -->
        <div class="buttons">
            <a href="{{ url('/autos') }}" class="btn-register">Ir al listado de autos</a>
            <a href="{{ url('/clientes') }}" class="btn-register">Ir al listado de clientes</a>
        </div>
    </div>
</body>
</html>
