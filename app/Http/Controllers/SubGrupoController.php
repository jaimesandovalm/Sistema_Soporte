<?php

namespace App\Http\Controllers;

use App\Models\SubGrupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar = DB::select('EXEC dbo.SP_LIS_SUBGRUPO');
        return view('SubGrupo.index',compact('listar'));
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
     * @param  \App\Models\SubGrupo  $subGrupo
     * @return \Illuminate\Http\Response
     */
    public function show(SubGrupo $subGrupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubGrupo  $subGrupo
     * @return \Illuminate\Http\Response
     */
    public function edit(SubGrupo $subGrupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubGrupo  $subGrupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubGrupo $subGrupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubGrupo  $subGrupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubGrupo $subGrupo)
    {
        //
    }
}