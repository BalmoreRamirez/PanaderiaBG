<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = rol::all();
        return $roles;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Mensaje = [
            'required' => 'El :attribute es requerido',
            'unique' => 'EL registro ya existe en la Base' 
        ];

        $validaciones = validator::make($request->all(), [
            'NombreRol' => 'required|unique:rols',
        
        ], $Mensaje);

        if ($validaciones->fails()) {
            $errores = $validaciones->errors();

            return response()->json($errores, 402);
        } else {
            $Rol = Rol::create($request->all());

            return '{"msg":"creado","result":' . $Rol . '}';
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rol $rol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        //
    }
}
