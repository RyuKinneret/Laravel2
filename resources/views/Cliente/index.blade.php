<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    @vite(['resources/css/index.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Video de fondo -->
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Listado de Clientes</h1>
            <hr>
        </header>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->cliente_id }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn-action">
                                <img src="{{ asset('svg/edit-user-7-svgrepo-com.svg') }}" alt="Editar" width="16" height="16">
                                Editar
                            </a>
                            |
                            <a href="{{ route('clientes.delete', $cliente) }}" class="btn-action">
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
        <a href="{{ url('/clientes/create') }}" class="btn-register">Registrar Cliente</a>
    </div>
</body>
</html>
