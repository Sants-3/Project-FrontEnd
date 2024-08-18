<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Vuelos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .container {
            text-align: center;
            width: 100%;
        }
        .table {
            margin: 0 auto;
            width: 80%;
        }
        th, td {
            text-align: center;
        }
        .btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informe de Vuelos</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Número de Vuelo</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fecha de Salida</th>
                    <th>Fecha de Llegada</th>
                    <th>Aerolínea</th>
                    <th>Número de Reservas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vuelos as $vuelo)
                    <tr>
                        <td>{{ $vuelo->numeroVuelo }}</td>
                        <td>{{ $vuelo->ciudadOrigen->Nombre }}</td>
                        <td>{{ $vuelo->ciudadDestino->Nombre }}</td>
                        <td>{{ $vuelo->fechaSalida }}</td>
                        <td>{{ $vuelo->fechaLlegada }}</td>
                        <td>{{ $vuelo->avion->Aerolinea }}</td>
                        <td>{{ $vuelo->reservas->count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="btn btn-secondary" onclick="window.history.back()">Volver</button>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
