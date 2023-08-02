@extends('layout/plantilla')

@section('tituloPagina', 'Prueba Tecnica')

@section('contenido')

    <div class="card">
        <div class="card-header">
            Prueba Tecnica Crud
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title">Lista de Proveedores</h5>
            <p>
                <a href="{{ route('proveedores.create') }}" class="btn btn-primary"> <span class="fas fa-user-plus"></span>
                </a>
            </p>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table bordered">
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
                        <th>Ver</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->nit }}</td>
                                <td>{{ $item->razon_social }}</td>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->apellido }}</td>
                                <td>{{ $item->telefono }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->ciudad }}</td>
                                <td>
                                    <form action="{{ route('proveedores.edit', $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm"><span
                                                class="fas fa-user-edit"></span></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('proveedores.show', $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm"><span
                                                class="fas fa-user-times"></span></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('proveedores.ver', $item->id) }}" method="GET">
                                        <button class="btn btn-info btn-sm"><span class="fas fa-user-times"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
@endsection()
