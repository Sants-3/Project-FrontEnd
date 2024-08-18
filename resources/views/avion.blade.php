<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Avión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Detalles del Avión</h1>

        <div class="card">
            <div class="card-header">
                Información del Avión
            </div>
            <div class="card-body">
                <h5 class="card-title">Modelo: {{ $avion->modelo }}</h5>
                <p class="card-text"><strong>Marca:</strong> {{ $avion->marca }}</p>
                <p class="card-text"><strong>Año:</strong> {{ $avion->anio }}</p>
                <p class="card-text"><strong>Capacidad:</strong> {{ $avion->capacidad }}</p>
                <p class="card-text"><strong>Aerolínea:</strong> {{ $avion->aerolinea }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('mantenimiento.index', $avion->id) }}" class="btn btn-primary">Ver Mantenimiento</a>
                <button class="btn btn-secondary mt-3" onclick="window.history.back()">Volver</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
