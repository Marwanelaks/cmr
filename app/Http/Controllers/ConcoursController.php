<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concours;
use App\Models\Equipe;
use App\Models\Nouvelles;
class ConcoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concours = Concours::all();
        $equipe = Equipe::all();
        $nouvelle = Nouvelles::all();
        return view("home")->with(["concours"=>$concours,"equipe"=>$equipe,"nouvelle"=>$nouvelle]);
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
        
        if($type === "equipe"){
            $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $equipe = new Equipe([
            'titre' => $request->get('titre'),
            'description' => $request->get('description'),
            'image' => $imageName,
            'type' => $request->get('type'),
        ]);
        
        $equipe->save();
        }
        elseif($type === "concours"){
            $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $concours = new Concours([
            'titre' => $request->get('titre'),
            'description' => $request->get('description'),
            'image' => $imageName,
        ]);
        
        $concours->save();
        }
        elseif($type === "nouvelle"){
            $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $nouvelle = new Nouvelles([
            'titre' => $request->get('titre'),
            'description' => $request->get('description'),
            'image' => $imageName,
            'type' => $request->get('type'),
        ]);
        
        $nouvelle->save();
        }
      
        return redirect($type . "/list");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type,$id,$m)
    {
        if($type === "concours"){
            $datas = Concours::find($id);
        }
        elseif($type === "equipe"){
            $datas = Equipe::find($id);
        }
        elseif($type === "nouvelle"){
            $datas = Nouvelles::find($id);
        }
        return view("crtl_1.eleve.show")->with(["datas"=>$datas,"type"=>$type,"method"=>$m]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$type, $id)
    {
        $modifications = $request->all();

        if($type === "concours"){
            $datas = Concours::find($id);
        }
        elseif($type === "equipe"){
            $datas = Equipe::find($id);
        }
        elseif($type === "nouvelle"){
            $datas = Nouvelles::find($id);
        }

        $datas->update($modifications);
        return redirect($type."/list");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($type,$id)
    {
        if($type === "concours"){
           Concours::destroy($id);
        }
        elseif($type === "equipe"){
            Equipe::destroy($id);
        }
        elseif($type === "nouvelle"){
            Nouvelles::destroy($id);
        }
        return redirect($type . "/list");
    }
}
