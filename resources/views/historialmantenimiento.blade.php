<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Mantenimiento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Historial de Mantenimiento del Avión: {{ $avion->modelo }}</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Operario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mantenimientos as $mantenimiento)
                    <tr>
                        <td>{{ $mantenimiento->fecha }}</td>
                        <td>{{ $mantenimiento->descripcion }}</td>
                        <td>{{ $mantenimiento->operario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('mantenimiento.create', $avion->id) }}" class="btn btn-primary">Agregar Mantenimiento</a>
        <button class="btn btn-secondary mt-3" onclick="window.history.back()">Volver</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
