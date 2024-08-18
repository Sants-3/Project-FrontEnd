@extends('layouts.app')

@section('content')
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
                    <th>Hora de Salida</th>
                    <th>Hora de Llegada</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vuelos as $vuelo)
                    <tr>
                        <td>{{ $vuelo->numeroVuelo }}</td>
                        <td>{{ $vuelo->origen }}</td>
                        <td>{{ $vuelo->destino }}</td>
                        <td>{{ $vuelo->fechaSalida }}</td>
                        <td>{{ $vuelo->fechaLlegada }}</td>
                        <td>{{ $vuelo->horaSalida }}</td>
                        <td>{{ $vuelo->horaLlegada }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button class="btn btn-secondary" onclick="window.history.back()">Volver</button>
    </div>
@endsection