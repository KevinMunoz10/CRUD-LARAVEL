<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    
    public function index()
    {
        $datos = Proveedores::all();
        return view('welcome', compact('datos'));
    }

    public function create()
    {
        return view('agregar');
    }

    
    public function store(Request $request)
    {
        //
        $proveedores = new Proveedores();
        $proveedores->nit = $request->post('nit');
        $proveedores->razon_social = $request->post('razon_social');
        $proveedores->nombre = $request->post('nombre');
        $proveedores->apellido = $request->post('apellido');
        $proveedores->telefono = $request->post('telefono');
        $proveedores->email = $request->post('email');
        $proveedores->ciudad = $request->post('ciudad');
        $proveedores->urlfile = $request->file('urfile');

        $proveedores->save();

        return redirect()->route("proveedores.index")->with("success", "Agregado Exitosamente");
    }

    
    public function show($id)
    {
        $proveedores = Proveedores::find($id);
        return view('eliminar', compact('proveedores'));
    }
    public function ver($id)
    {
        $proveedores = Proveedores::find($id);
        return view('mostrar', compact('proveedores'));
    }
    
    public function edit($id)
    {
        $proveedores = Proveedores::find($id);
        return view('actualizar', compact('proveedores'));
    }

    
    public function update(Request $request, $id)
    {
        $proveedores = Proveedores::find($id);

        $proveedores->nit = $request->post('nit');
        $proveedores->razon_social = $request->post('razon_social');
        $proveedores->nombre = $request->post('nombre');
        $proveedores->apellido = $request->post('apellido');
        $proveedores->telefono = $request->post('telefono');
        $proveedores->email = $request->post('email');
        $proveedores->ciudad = $request->post('ciudad');
        $proveedores->urlfile = $request->post('urfile');

        $proveedores->save();

        return redirect()->route("proveedores.index")->with("success", "Actualiza Exitosamente");
    
    }

    
    public function destroy($id)
    {
        $proveedores = Proveedores::find($id);
        $proveedores->delete();
        return redirect()->route("proveedores.index")->with("success", "Eliminado Exitosamente");
    }
}
