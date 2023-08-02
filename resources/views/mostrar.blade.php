@extends('layout/plantilla')

@section('tituloPagina', 'Crear nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Ver Proveedor</h5>
        <div class="card-body">

            <p class="card-text">

            <table class="table table-sm table-bordered">
                <thead>
                    <th>NIT</th>
                    <th>Razon Social</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $proveedores->nit }}</td>
                        <td>{{ $proveedores->razon_social }}</td>
                        <td>{{ $proveedores->nombre }}</td>
                        <td>{{ $proveedores->apellido }}</td>
                        <td>{{ $proveedores->telefono }}</td>
                        <td>{{ $proveedores->email }}</td>
                        <td>{{ $proveedores->ciudad }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary"><span class="fas fa-undo-alt"></span></a>
            <hr>
            </p>

        </div>
    </div>
@endsection
