<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

class EmpleadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //evita que puedan ingresar al sistema sin loguearse y solo poniendo las url
    }
    /**
     * Display a listing of the resource.
     * @return \Iluminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all(); //nos trae todos los registros de la tabla
        return view('admin.empleados')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createempleado'); //manda a llamar la vista para crear nuevo usuario (Monitor)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Hace que se guarden los registros
        //hacemos una instancia
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'clave' => 'required|min:8',
            'name' => 'required',
            'permissions' => 'nullable'
        ]);
    
        $data['clave'] = Hash::make($data['clave']);
    
        $empleados = Empleado::create($data);
        $empleados->save(); //hace que se guarden los registros en la tabla
    
        return redirect('/usuarios'); //al guardar, vuelve a la pantalla principal
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
