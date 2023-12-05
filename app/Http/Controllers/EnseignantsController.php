<?php

namespace App\Http\Controllers;

use App\Models\enseignants;
use Illuminate\Http\Request;

class EnseignantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ens = enseignants::all();
        return view("crtl_1.eleve.index")->with("data",$ens);
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
     * @param  \App\Models\enseignants  $enseignants
     * @return \Illuminate\Http\Response
     */
    public function show(enseignants $enseignants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enseignants  $enseignants
     * @return \Illuminate\Http\Response
     */
    public function edit(enseignants $enseignants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enseignants  $enseignants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enseignants $enseignants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enseignants  $enseignants
     * @return \Illuminate\Http\Response
     */
    public function destroy(enseignants $enseignants)
    {
        //
    }
}
