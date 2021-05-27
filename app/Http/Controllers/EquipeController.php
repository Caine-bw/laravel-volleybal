<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::paginate(3);
        return view('backoffice.equipe.all',compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "ville"=>"required",
            "pays"=>"required",
            "continent_id"=>"required",
        ]);

        $equipe= new Equipe;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->continent_id =$request->continent_id;
        $equipe->created_at = now();
        $equipe->updated_at = now();
        $equipe->save();
        
        return redirect()->route('equipes.index')->with('message','Vous avez bien créée une nouvelle équipe :'." ".  $equipe->nom);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view("backoffice.equipe.read",compact("equipe"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        return view("backoffice.equipe.edit",compact("equipe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            "nom"=>"required",
            "ville"=>"required",
            "pays"=>"required",
            "continent_id"=>"required",
        ]);
        
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->ATT=$request->ATT;
        $equipe->CT=$request->CT;
        $equipe->DC=$request->DC;
        $equipe->RP=$request->RP;
        $equipe->continent_id =$request->continent_id;
        $equipe->updated_at = now();    
        $equipe->save();

        return redirect()->route("equipes.index")->with('message','Vous avez bien mis a jour l"equipe :' . $equipe->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->back();
    }
}
