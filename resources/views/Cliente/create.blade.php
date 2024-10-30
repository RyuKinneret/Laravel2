<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/create.css', 'resources/js/app.js'])
    <title>Registrar Cliente</title>
</head>
<body>
    <!-- Video de fondo -->
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Registrar Cliente</h1>
        </header>
        
        <form name="cliente-form" method="post" action="{{ route('clientes.store') }}">
            @csrf

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Ingrese el nombre">
                <span class="error-message">
                    @error('nombre') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" placeholder="Ingrese el apellido">
                <span class="error-message">
                    @error('apellido') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Ingrese el email">
                <span class="error-message">
                    @error('email') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" placeholder="Ingrese el teléfono">
                <span class="error-message">
                    @error('telefono') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" placeholder="Ingrese la dirección">
                <span class="error-message">
                    @error('direccion') {{ $message }} @enderror
                </span>
            </div>

            <div class="buttons">
                <button type="submit">Guardar</button>
                <button type="button" onclick="location.href='{{ url('/clientes') }}'">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>
