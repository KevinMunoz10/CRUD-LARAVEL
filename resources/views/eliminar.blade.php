@extends('layout/plantilla')

@section('tituloPagina', 'Crear nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Eliminar Proveedores</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de Eliminar este registro ?

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
                <hr>
                <form action="{{ route('proveedores.destroy', $proveedores->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary"><span
                            class="fas fa-undo-alt"></span></a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>
                    </button>
                </form>
            </div>
            </p>

        </div>
    </div>
@endsection
