<?php

namespace App\Http\Controllers;

use App\Models\TipoRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar = DB::select('EXEC dbo.SP_LIS_TIPOREGISTRO');
        return view('TipoRegistro.index',compact('listar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\TipoRegistro  $tipoRegistro
     * @return \Illuminate\Http\Response
     */
    public function show(TipoRegistro $tipoRegistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoRegistro  $tipoRegistro
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoRegistro $tipoRegistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoRegistro  $tipoRegistro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoRegistro $tipoRegistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoRegistro  $tipoRegistro
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoRegistro $tipoRegistro)
    {
        //
    }
}