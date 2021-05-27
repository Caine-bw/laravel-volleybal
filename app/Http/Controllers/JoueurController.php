<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::paginate(7);
        $equipes = Equipe::all();
        return view("backoffice.joueur.all",compact("joueurs", "equipes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("backoffice.joueur.create", compact("genres", "roles", "equipes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $photo = new Photo();
        $joueur = new Joueur();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->numero= $request->numero;
        $joueur->genre_id = $request->genre_id;
        $joueur->role_id = $request->role_id;
        $joueur->pays = $request->pays;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->created_at = now();
        $joueur->updated_at = now();
        $joueur->save();
        $photo-> image = $request->file('image')->hashName();
        $photo->joueur_id = $joueur->id;
        $request-> file("image")->storePublicly("img","public");
        $photo->save();

        return redirect()->route('joueurs.index')->with('message', 'Vous avez créé un.e joueur.e mec');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view ("backoffice.joueur.read",compact("joueur"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        $genres = Genre::all();
        $equipes = Equipe::all();
        $roles = Role::all();
        return view("backoffice.joueur.edit",compact("joueur", "genres", "equipes", "roles"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        
        // $photo = Photo::find($joueur->photo->id);

        $photo = new Photo();
        
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        // $joueur->email = $request->email;
        $joueur->age = $request->age;
        $joueur->genre_id = $request->genre_id;
        $joueur->role_id = $request->role_id;
        $joueur->pays = $request->pays;
        $joueur->updated_at = now();
        $joueur->save();
        $photo-> image = $request->file('image')->hashName();
        $photo->joueur_id = $joueur->id;
        $request-> file("image")->storePublicly("img","public");
        $photo->save();

        
        return redirect()->route(("joueurs.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
        return redirect()->back();
    }
}
