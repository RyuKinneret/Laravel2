<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>Listado de Autos</title>
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Aplicación Web</h1>
            <hr>
        </header>
        
        <div class="table-container">
            <table>
                <caption style="line-height: 30px;">¡Autos - Listar!</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Tipo</th>
                        <th>Color</th>
                        <th>Año de Fabricación</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Stock</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($baraja as $carta)
                    <tr>
                        <td>{{ $carta->auto_id }}</td>
                        <td>{{ $carta->marca }}</td>
                        <td>{{ $carta->modelo }}</td>
                        <td>{{ $carta->tipo }}</td>
                        <td>{{ $carta->color }}</td>
                        <td>{{ $carta->anio_fabricacion }}</td>
                        <td>{{ $carta->precio }}</td>
                        <td>{{ $carta->estado }}</td>
                        <td>{{ $carta->stock }}</td>
                        <td>
                            <a href="{{ route('autos.edit', $carta) }}" class="btn-action">
                                <img src="{{ asset('svg/edit-user-7-svgrepo-com.svg') }}" alt="Editar" width="16" height="16">
                                Editar
                            </a>
                            |
                            <a href="{{ route('autos.delete', $carta) }}" class="btn-action">
                                <img src="{{ asset('svg/delete-file-2-svgrepo-com.svg') }}" alt="Borrar" width="16" height="16">
                                Borrar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br>
        <a href="{{ url('/autos/create') }}" class="btn-register">Registrar</a>
    </div>
</body>
</html>
