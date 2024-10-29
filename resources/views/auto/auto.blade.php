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
        </header>
        
        <div class="table-container">
            <table>
                <caption>Autos - Listar</caption>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
