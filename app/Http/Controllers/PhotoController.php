<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(5);
        return view("backoffice.photo.all",compact("photos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $joueurs= Joueur::all();

        return view ("backoffice.photo.create",compact("joueurs"));
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
            'img'=>'required',
        ]);
        $photo = new Photo();
        $photo->pdp=$request->pdp;
        $photo->lien= $request->file("lien")->hasName();
        $photo->joueur_id = $request->joueur_id;
        $photo->created_at = now();
        $photo->updated_at = now();

        $photo->save();
        $photo->file("lien")->storePublicly("img","public");
        return redirect()->route('photos.index')->with('message','Votre photo à bien été enregistré:'."". $photo->pdp);

    }
      //// **COMMENTAIRE: J'ai pas mit de nom dans le request j'ai remplacé par pdp
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('backoffice.photo.read',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('backoffice.photo.edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->pdp = $request->pdp;
        if($request->file("lien") !==null){
            Storage::disk("public")->delete("img/". $photo->lien);
            $photo->lien = $request->file("lien")->hasName();
            $request->file("lien")->storePublicly("img", "public");
            
            $photo->pdp = $request->pdp;
            $photo->joueur_id - $request->joueur_id;
            $photo->update_at= now();
            
            $photo->save();

            return redirect()->route("photo.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
       Storage::disk("public")->delete("img/" . $photo->lien);
       $photo->delete();

       return redirect()->back();
    }
    
    public function download($id)
    {
        $photo= Photo::find($id);
        return Storage::disk("public")->download("img/" . $photo->lien);
    }
}
