<?php

namespace App\Http\Controllers;

use App\Models\emplois_du_temps;
use Illuminate\Http\Request;

class EmploisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empl = emplois_du_temps::all();
        return view("crtl_1.eleve.index")->("data",$empl);
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
     * @param  \App\Models\emplois_du_temps  $emplois_du_temps
     * @return \Illuminate\Http\Response
     */
    public function show(emplois_du_temps $emplois_du_temps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\emplois_du_temps  $emplois_du_temps
     * @return \Illuminate\Http\Response
     */
    public function edit(emplois_du_temps $emplois_du_temps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\emplois_du_temps  $emplois_du_temps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emplois_du_temps $emplois_du_temps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\emplois_du_temps  $emplois_du_temps
     * @return \Illuminate\Http\Response
     */
    public function destroy(emplois_du_temps $emplois_du_temps)
    {
        //
    }
}
