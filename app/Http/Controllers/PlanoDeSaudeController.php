<?php

namespace App\Http\Controllers;

use App\PlanoDeSaude;
use App\Http\Requests\PlanoDeSaudeRequest AS Request;

class PlanoDeSaudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PlanoDeSaude::all();
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

        return PlanoDeSaude::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\planoDeSaude  $planoDeSaude
     * @return \Illuminate\Http\Response
     */
    public function show(planoDeSaude $planoDeSaude)
    {
        return $planoDeSaude;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\planoDeSaude  $planoDeSaude
     * @return \Illuminate\Http\Response
     */
    public function edit(planoDeSaude $planoDeSaude)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\planoDeSaude  $planoDeSaude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, planoDeSaude $planoDeSaude)
    {
        $planoDeSaude->update($request->all());
        return $planoDeSaude;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\planoDeSaude  $planoDeSaude
     * @return \Illuminate\Http\Response
     */
    public function destroy(planoDeSaude $planoDeSaude)
    {
        $planoDeSaude->delete();
        return $planoDeSaude;
    }
}
