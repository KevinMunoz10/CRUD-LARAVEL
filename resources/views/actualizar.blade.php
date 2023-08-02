@extends('layout/plantilla')

@section('tituloPagina', 'Crear nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar Proveedor</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('proveedores.update', $proveedores->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">NIT</label>
                <input type="text" name="nit" class="form-control" required value="{{ $proveedores->nit }}">
                <label for="">Razon Social</label>
                <input type="text" name="razon_social" class="form-control" required
                    value="{{ $proveedores->razon_social }}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{ $proveedores->nombre }}">
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required value="{{ $proveedores->apellido }}">
                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control" required value="{{ $proveedores->telefono }}">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required value="{{ $proveedores->email }}">
                <label for="">Ciudad</label>
                <input type="text" name="ciudad" class="form-control" required value="{{ $proveedores->ciudad }}">
                <br>
                <a href="{{ route('proveedores.index') }}" class="btn btn-secondary"><span
                        class="fas fa-undo-alt"></span></a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>
                </button>
            </form>
            </p>

        </div>
    </div>
@endsection
