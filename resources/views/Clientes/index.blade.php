@extends('layouts.app')
@section('title', 'Clientes')
@section('content')
    <table style="border: 3px solid rgb(0, 17, 255); width: 100%;">
        <thead>
            <tr style="background-color: #05DF72" >
                <th style="padding: 8px;">Id</th>
                <th style="padding: 8px;">Nombre</th>
                <th style="padding: 8px;">Direccion</th>
                <th style="padding: 8px;">Telefono</th>
                <th style="padding: 8px;">FechaAlta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr style="background-color: #7BF1A8">
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->f_alta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
