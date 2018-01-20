<?php

namespace App\Http\Controllers;

use App\clinica;
use App\Http\Requests\ClinicaRequest AS Request;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Clinica::all();
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
        return Clinica::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function show(clinica $clinica)
    {
        return $clinica;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function edit(clinica $clinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clinica $clinica)
    {
        $clinica->update($request->all());
        return $clinica;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(clinica $clinica)
    {
        $clinica->delete();
        return $clinica;
    }
}
