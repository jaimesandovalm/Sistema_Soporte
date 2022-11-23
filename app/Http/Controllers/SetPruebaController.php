<?php

namespace App\Http\Controllers;

use App\Models\SetPrueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetPruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar = DB::Select('EXEC dbo.SP_LIS_SETPRUEBA');
        return view('SetPrueba.index',compact('listar'));
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
     * @param  \App\Models\SetPrueba  $setPrueba
     * @return \Illuminate\Http\Response
     */
    public function show(SetPrueba $setPrueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SetPrueba  $setPrueba
     * @return \Illuminate\Http\Response
     */
    public function edit(SetPrueba $setPrueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SetPrueba  $setPrueba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SetPrueba $setPrueba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SetPrueba  $setPrueba
     * @return \Illuminate\Http\Response
     */
    public function destroy(SetPrueba $setPrueba)
    {
        //
    }
}