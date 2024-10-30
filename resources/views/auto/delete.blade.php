<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/delete.css', 'resources/js/app.js'])
    <title>Eliminar Auto</title>
</head>

<body>
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Eliminar Auto</h1>
        </header>

        <form name="auto-delete-form" method="post" action="{{ route('autos.destroy', $auto) }}">
            @csrf
            @method('delete')

            <p>¿Está seguro de que desea eliminar este auto?</p>

            <label for="auto_id">Auto ID:</label>
            <input type="text" name="auto_id" id="auto_id" value="{{ $auto->auto_id }}" readonly />
            <br>

            <label for="marca">Marca:</label>
            <input type="text" name="marca" id="marca" value="{{ $auto->marca }}" readonly />
            <br>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" id="modelo" value="{{ $auto->modelo }}" readonly />
            <br><br>

            <button type="submit">Sí, borrar</button>
            <button type="button" onclick="location.href='{{ url('/autos') }}'">Cancelar</button>
        </form>
    </div>
</body>

</html>
