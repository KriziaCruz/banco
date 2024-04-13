<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados=Empleado::all();
        return view('empleado.index')->with('empleados',$empleados);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado=new Empleado();
        $empleado->codempleado=$request->get('codempleado');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->nivel=$request->get('nivel');
        $empleado->telefono=$request->get('telefono');
        $empleado->save();
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Empleado::find($id);
        return view('empleado.delete')->with('eliminarRegistro', $eliminarRegistro);
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Empleado::find($id);
        return view('empleado.edit')->with('editarRegistro', $editarRegistro); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Empleado::find($id);
        $editarRegistro->codempleado=$request->get('codempleado');
        $editarRegistro->nombre=$request->get('nombre');
        $editarRegistro->apellido=$request->get('apellido');
        $editarRegistro->nivel=$request->get('nivel');
        $editarRegistro->telefono=$request->get('telefono');
        $editarRegistro->save();
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Empleado::find($id);
        $eliminarRegistro->delete();
        return redirect('empleado');
    }
}
