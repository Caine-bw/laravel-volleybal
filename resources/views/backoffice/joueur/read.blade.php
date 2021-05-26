@extends('layout.app')

@section('content')

<div class="d-flex justify-content-center">

    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{ asset("img/" . $joueur -> pdp) }}" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $joueur->nom }}</h5>
          <h3 class="card-text">{{ $joueur->prenom }}</h3>
          <p>{{ $joueur->age }}</p>
          <p>{{ $joueur->numero }} </p>
          <p>{{ $joueur->pays }} </p>
          <p>{{ $joueur->genre_id }} </p>
          <p>{{ $joueur->equipe -> nom }} </p>
          <p>{{ $joueur->role -> nom }} </p>
        </div>
      </div>
    
</div>

@endsection