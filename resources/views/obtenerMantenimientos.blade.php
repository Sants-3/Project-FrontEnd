<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mantenimientos</title>
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
    </style>
</head>
<body>

    <h1>Lista de Manteniminetos</h1>
    <table>
        <thead>
            <tr>
                <th>fecha</th>
                <th>descripcion</th>
            </tr>
        </thead>
        <tbody>
            <!-- Las filas de aviones se insertarán aquí -->
            @foreach($mantenimientos as $mantenimiento)
            <tr>
                <td>{{ $mantenimiento['fecha'] }}</td>
                <td>{{ $mantenimiento['descripcion'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>

