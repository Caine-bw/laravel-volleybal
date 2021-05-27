@extends('layout.app')

@section('content')


<div class="d-flex justify-content-center">

    <div class="card" style="width:400px">
      @if ($joueur -> photo)
      <img class="card-img-top img-fluid" src="{{ asset("img/" . $joueur -> photo->image) }}" alt="">
      @else
         <h1>Pas de photo pour cette utilisateur</h1>
      @endif
        <div class="card-body">
          <h2 class="card-title">Nom:  {{ $joueur->nom }}</h2>
          <h5 class="card-text">Prenom: {{ $joueur->prenom }}</h5>
          <p>Age: {{ $joueur->age }}</p>
          <p>Numéro: {{ $joueur->numero }} </p>
          <p>Pays: {{ $joueur->pays }} </p>
          <p>Genre: {{ $joueur->genre_id }} </p>
          <p>Equipe: {{ $joueur->equipe -> nom }}</p>
          <p>Poste: {{ $joueur->role -> nom }} </p>
        </div>
        <div class="d-flex justify-content-center">
          <a href={{ route("equipes.index") }} class="mb-3 btn btn-secondary text-white w-100"><i class="fas fa-arrow-alt-circle-left"></i></a>
      </div>
      </div> 
      
</div>
@endsection