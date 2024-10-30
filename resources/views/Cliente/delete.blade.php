<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/deletes.css', 'resources/js/app.js'])
    <title>Eliminar Cliente</title>
</head>
<body>
    <!-- Video de fondo -->
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Eliminar Cliente</h1>
        </header>

        <p>¿Está seguro de que desea eliminar a este cliente?</p>
        <p>Nombre: {{ $cliente->nombre }} {{ $cliente->apellido }}</p>

        <form name="cliente-delete-form" method="post" action="{{ route('clientes.destroy', $cliente) }}">
            @csrf
            @method('delete')
            
            <div class="buttons">
                <button type="submit">Sí, eliminar</button>
                <button type="button" onclick="location.href='{{ url('/clientes') }}'">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>
