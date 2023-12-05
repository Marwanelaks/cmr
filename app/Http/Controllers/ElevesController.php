<?php

namespace App\Http\Controllers;

use App\Models\eleves;
use App\Models\notes;
use App\Models\cours;
use App\Models\enseignants;
use App\Models\matieres;
use App\Models\emplois_du_temps;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($indx)
    {
        if($indx === "eleve"){
            $donnees = eleves::all();
        }
        elseif($indx === "notes"){
            $donnees = notes::all();
        }
        elseif($indx === "emplois"){
            $donnees = emplois_du_temps::all();
        }
        elseif($indx === "matieres"){
            $donnees = matieres::all();
        }
        elseif($indx === "cours"){
            $donnees = cours::all();
        }
        elseif($indx === "enseignant"){
            $donnees = enseignants::all();
        }
        return view("home")->with(["data"=>$donnees , "type"=>$indx]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($hkey)
    {
        return view("crtl_1.eleve.create")->with("type",$hkey);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $type)
    {
        $datas = $request->all();
        
        if($type === "eleve"){
            eleves::create($datas);
        }
        elseif($type === "notes"){
            notes::create($datas);
        }
        elseif($type === "emplois"){
            emplois_du_temps::create($datas);
        }
        elseif($type === "matieres"){
            matieres::create($datas);
        }
        elseif($type === "cours"){
            cours::create($datas);
        }
        elseif($type === "enseignant"){
            enseignants::create($datas);
        }
        return redirect($type."/list" )->with("flash_message","eleve crée avec succés!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function show($type,$id,$m)
    {
        if($type === "eleve"){
            $datas = eleves::find($id);
        }
        elseif($type === "note"){
            $datas = notes::find($id);
        }
        elseif($type === "emploi"){
            $datas = emplois_du_temps::find($id);
        }
        elseif($type === "matieres"){
            $datas = matieres::find($id);
        }
        elseif($type === "cours"){
            $datas = cours::find($id);
        }
        elseif($type === "enseignant"){
            $datas = enseignants::find($id);
        }
        return view("crtl_1.eleve.show")->with(["datas"=>$datas,"type"=>$type,"method"=>$m]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    // public function edit($id,$m)
    // {
    //     $eleves = eleves::find($id);
    //     return view("crtl_1.eleve.show")->with(["eleve"=>$eleves,"method"=>$m]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$type, $id)
    {   

        $modifications = $request->all();

        if($type === "eleve"){
            $datas = eleves::find($id);
        }
        elseif($type === "notes"){
            $datas = notes::find($id);
        }
        elseif($type === "emplois"){
            $datas = emplois_du_temps::find($id);
        }
        elseif($type === "matieres"){
            $datas = matieres::find($id);
        }
        elseif($type === "cours"){
            $datas = cours::find($id);
        }
        elseif($type === "enseignant"){
            $datas = enseignants::find($id); 
        }

        $datas->update($modifications);
        return redirect($type."/list");
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eleves  $eleves
     * @return \Illuminate\Http\Response
     */
    public function destroy($type,$id)
    {   
        if($type === "eleve"){
           eleves::destroy($id);
        }
        elseif($type === "notes"){
            notes::destroy($id);
        }
        elseif($type === "emplois"){
            emplois_du_temps::destroy($id);
        }
        elseif($type === "matieres"){
            matieres::destroy($id);
        }
        elseif($type === "cours"){
            cours::destroy($id);
        }
        elseif($type === "enseignant"){
            enseignants::destroy($id); 
        }

        return redirect($type . "/list");

    }
}