<?php

namespace App\Http\Controllers;

use App\Models\TipoProveedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TipoProveedor = TipoProveedor::all();
        return $TipoProveedor;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoProveedor  $tipoProveedor
     * @return \Illuminate\Http\Response
     */
    public function show(TipoProveedor $tipoProveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoProveedor  $tipoProveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoProveedor $tipoProveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoProveedor  $tipoProveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoProveedor $tipoProveedor)
    {
        //
    }
}
