<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Detalles del Cliente</h1>

        <div class="card">
            <div class="card-header">
                Información del Cliente
            </div>
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $cliente->nombre }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
                <p class="card-text"><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary mt-3" onclick="window.history.back()">Volver</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
