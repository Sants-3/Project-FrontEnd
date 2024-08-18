<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Piloto al Vuelo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Asignar Piloto al Vuelo: [Número de Vuelo]</h1>

        <form action="/vuelos/[idVuelo]/assign" method="POST">
            <!-- Token CSRF -->
            <input type="hidden" name="_token" value="[CSRF Token]">

            <div class="form-group">
                <label for="piloto_id">Selecciona un Piloto</label>
                <select name="piloto_id" id="piloto_id" class="form-control">
                    <option value="1">Piloto 1 (Licencia 123)</option>
                    <option value="2">Piloto 2 (Licencia 456)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Asignar Piloto</button>
        </form>

        <button class="btn btn-secondary mt-3" onclick="window.history.back()">Volver</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
