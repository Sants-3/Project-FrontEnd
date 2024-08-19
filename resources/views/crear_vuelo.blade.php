<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vuelo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .div-formulario{
        display:flex;
        justify-content: center;

    }
    .form-vuelo{
        width: 550px;
        border: black 2px solid;
        padding: 10px;
        border-radius: 9px;

    }
</style>
<body>
    <h1>Vista Para Crear Vuelos</h1>
    
    <div class="div-formulario">
    <form class="form-vuelo" action="{{route("vuelo.crear")}}" method="post">
        @csrf
        <!-- <div class="mb-3">
        <label for="" class="form-label">idVuelo: </label>
        <input type="text" class="form-control" name="id">
        </div> -->
        <div class="mb-3">
        <label for="" class="form-label">Origen: </label>
        <select class="form-select" name="origen" id="id_origen">
            <option value="1">Tegucigalpa</option>
            <option value="2">San Pedro Sula</option>
            <option value="3">La Ceiba</option>
            <option value="4">Honduras</option>
            <option value="5">Mexico</option>
            <option value="6">Brasil</option>
            <option value="7">Colombia</option>
            <option value="8">Francia</option>
            <option value="9">Japon</option>
        </select>
        </div>
       <div class="mb-3">
       <label for="" class="form-label">Destino: </label>
       <select class="form-select" name="destino" id="id_destino">
            <option value="1">Tegucigalpa</option>
            <option value="2">San Pedro Sula</option>
            <option value="3">La Ceiba</option>
            <option value="4">Honduras</option>
            <option value="5">Mexico</option>
            <option value="6">Brasil</option>
            <option value="7">Colombia</option>
            <option value="8">Francia</option>
            <option value="7">Japon</option>
        </select>
       </div>
      <div class="mb-3">
      <label for="" class="form-label">Numero De Vuelo: </label>
      <input type="text" class="form-control" name="numero_vuelo">
      </div>
       <div class="mb-3">
       <label for="" class="form-label">Hora De Salida: </label>
       <select class="form-select" name="hora_salida" id="id_hora_salida">
       <option value="10:00">10:00</option>
       <option value="2">10:30</option>
       <option value="3">11:00</option>
       <option value="4">12:00</option>
       <option value="5">13:00</option>
       <option value="6">14:00</option>
       <option value="7">15:00</option>
       </select>
       </div>
      <div class="mb-3">
      <label for="" class="form-label">Hora De Llegada: </label>
      <select class="form-select" name="hora_llegada" id="id_hora_salida">
       <option value="12:00">12:00</option>
       <option value="2">13:00</option>
       <option value="3">14:00</option>
       <option value="4">15:00</option>
       <option value="5">16:00</option>
       <option value="6">17:00</option>
       <option value="7">18:00</option>
       <option value="8">20:00</option>
       <option value="9">21:00</option>
       <option value="10">22:00</option>
       </select>
      </div>
        <div class="mb-3">
        <label for="" class="form-label">Fecha De Salida: </label>
        <input type="text" class="form-control" name="fecha_salida">
        </div>
       <div class="mb-3">
       <label for="" class="form-label">Fecha De Regreso: </label>
       <input type="text" class="form-control" name="fecha_regreso">
       </div>
       <div class="mb-3">
      <label for="" class="form-label">Tipo de Avion: </label>
      <select class="form-select" name="tipo_avion" id="id_avion">
       <optgroup label="Nacionales">
       <option value="1">Bombardier CRJ</option>
       <option value="2">Embraer E-Jets</option>  
       </optgroup>
       <optgroup label="Nacionales e Internacionales">
       <option value="1">Airbus A320</option>
       <option value="2">Boeing 737</option>  
       </optgroup>
       <optgroup label="Internacionales">
       <option value="1">Boeing 777</option>
       <option value="2">Airbus A350</option>  
       </optgroup>
       <optgroup label="Continentales">
       <option value="1">Boeing 787 Dreamliner</option>
       <option value="2">Airbus A380</option>  
       </optgroup>
       </select>
      </div>
      <div class="mb-3">
       <label for="" class="form-label">Tripulacion: </label>
       <select class="form-select" name="tripulacion" id="id_tripulacion">
       <option value="1">Economica</option>
       <option value="2">Ejecutiva</option>
       <option value="3">Primera Clase</option>
       </select>
       </div>
    <div style="display:flex; justify-content:center; width:100%">
    <button type="submit" class="btn btn-primary" >Crear Vuelo</button>
    </div>
  
    </form>
    </div>

    
</body>
</html>
