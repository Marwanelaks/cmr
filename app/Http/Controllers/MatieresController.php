<?php

namespace App\Http\Controllers;

use App\Models\matieres;
use Illuminate\Http\Request;

class MatieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matiere = matieres::all();
        return view("crtl_1.eleve.index")->with("data",$matiere);
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
     * @param  \App\Models\matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function show(matieres $matieres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function edit(matieres $matieres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matieres $matieres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function destroy(matieres $matieres)
    {
        //
    }
}
