@extends('layouts.app')
@section('title', 'Clientes')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>FechaAlta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
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
