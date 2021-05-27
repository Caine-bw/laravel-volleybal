@extends('layout.app')
@section('content')
    <section class="container text-light">
        <h2 class="text-center my-4">Ajouter un Joueur</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach
      </ul>
        <form method="POST" action="{{route("joueurs.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">prenom</label>
                <input type="text" class="form-control"  name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input type="number" class="form-control"  name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">numero</label>
                 <input type="number" class="form-control" name="numero">
            </div>
            <div class="mb-3">
                <label class="form-label">Pays</label>
                <input type="text" class="form-control" name="pays">
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
                <label class="form-label">Role</label>
                <select name="role_id" class="form-control" >
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Équipe</label>
                <select name="equipe_id" class="form-control" >
                    @foreach ($equipes as $equipe)
                        <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Photo de profil</label>
              <input type="file" class="form-control"  name="image">
            </div>
            <button type="submit" class="btn btn-secondary text-light w-100 mb-3"><i class="fas fa-user-check"></i></button>
          </form>
    </section>
@endsection