<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/edit.css', 'resources/js/app.js'])
    <title>Editar Auto</title>
</head>
<body>
    <video id="background-video" autoplay loop muted>
        <source src="{{ asset('videos/Tunnel Drift live wallpaper.mp4') }}" type="video/mp4">
    </video>

    <div class="container">
        <header>
            <h1>Editar Auto</h1>
        </header>
        
        <form name="auto-edit-form" method="post" action="{{ route('autos.update', $auto) }}">
            @csrf
            @method('put')

            <div>
                <label for="auto_id">Auto ID:</label>
                <input type="text" name="auto_id" id="auto_id" value="{{ $auto->auto_id }}" readonly />
            </div>

            <div>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" value="{{ old('marca', $auto->marca) }}" />
                <span class="error-message">
                    @error('marca') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" value="{{ old('modelo', $auto->modelo) }}" />
                <span class="error-message">
                    @error('modelo') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" id="tipo" value="{{ old('tipo', $auto->tipo) }}" />
                <span class="error-message">
                    @error('tipo') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" value="{{ old('color', $auto->color) }}" />
                <span class="error-message">
                    @error('color') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="anio_fabricacion">Año de Fabricación:</label>
                <input type="number" name="anio_fabricacion" id="anio_fabricacion" value="{{ old('anio_fabricacion', $auto->anio_fabricacion) }}" />
                <span class="error-message">
                    @error('anio_fabricacion') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" step="any" value="{{ old('precio', $auto->precio) }}" />
                <span class="error-message">
                    @error('precio') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" value="{{ old('estado', $auto->estado) }}" />
                <span class="error-message">
                    @error('estado') {{ $message }} @enderror
                </span>
            </div>

            <div>
                <label for="stock">Stock:</label>
                <input type="number" name="stock" id="stock" value="{{ old('stock', $auto->stock) }}" />
                <span class="error-message">
                    @error('stock') {{ $message }} @enderror
                </span>
            </div>

            <div class="buttons">
                <button type="submit">Guardar</button>
                <button type="button" onclick="location.href='{{ url('/autos') }}'">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>
