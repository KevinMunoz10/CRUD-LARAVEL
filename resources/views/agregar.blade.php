@extends('layout/plantilla')

@section('tituloPagina', 'Crear nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar Proveedor</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('proveedores.store') }}" method="POST">
                @csrf
                <label for="">NIT</label>
                <input type="text" name="nit" class="form-control" required>
                <label for="">Razon Social</label>
                <input type="text" name="razon_social" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control" required>
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required>
                <label for="">Ciudad</label>
                <input type="text" name="ciudad" class="form-control" required>

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
