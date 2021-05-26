@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Edit user</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/joueurs/{{ $joueur->id }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input value="{{ $joueur->nom }}" type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input value="{{ $joueur->prenom }}" type="text" class="form-control"  name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input value="{{ $joueur->age }}" type="number" class="form-control"  name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">Numero</label>
                <input value="{{ $joueur->numero }}" type="number" class="form-control"  name="numero">
            </div>
            <div class="mb-3">
                <label class="form-label">Pays</label>
                <input value="{{ $joueur->pays }}" type="text" class="form-control"  name="pays">
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                <select name="genre_id" class="form-control" >
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Equipe</label>
                <select name="equipe_id" class="form-control" >
                    @foreach ($equipes as $equipe)
                        <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role_id" class="form-control" >
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Photo de profil</label>
              <input type="file" class="form-control"  name="pdp">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection