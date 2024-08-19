<!-- resources/views/aviones.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Aviones</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons a {
            text-decoration: none;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            font-size: 14px;
        }
        .action-buttons a.edit {
            background-color: #2196F3;
        }
    </style>
</head>
<body>

    <h1>Lista de Aviones</h1>

    @if(isset($error))
        <p>{{ $error }}</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Matrícula</th>
                    <th>Capacidad</th>
                    <th>Acciones</th> <!-- Nueva columna para los botones -->
                </tr>
            </thead>
            <tbody>
                @foreach($aviones as $avion)
                    <tr>
                        <td>{{ $avion['modelo'] }}</td>
                        <td>{{ $avion['matricula'] }}</td>
                        <td>{{ $avion['capacidad'] }}</td>
                        <td class="action-buttons">
                            <!-- Botón para ver detalles -->
                            <a href={{ route('obtener.manteniminetos', ['codigoAvion' => $avion['codigoAvion']]) }}>Ver Manteniminetos</a>
                            <!-- Botón para editar -->
                            <a href={{ route('crear.mantenimineto', ['codigoAvion' => $avion['codigoAvion']]) }}>Agregar mantenimientos</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
