@extends('layout.app')
@section('content')
<section class="container text-light">
    <ul class=" text-light">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <h2 class="text-center text-decoration-underline my-3">Edit un joueur</h2>
    <form action="{{ route('joueurs.update', $joueur->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $joueur->nom }}" type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom</label>
            <input value="{{ $joueur->prenom }}" type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input value="{{ $joueur->age }}" type="text" class="form-control" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">numero</label>
             <input value="{{ $joueur->numero }}" type="number" class="form-control" name="numero">
        </div>
        <div class="mb-3">
            <label class="form-label">Pays</label>
            <input value="{{ $joueur->pays }}" type="text" class="form-control" name="pays">
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
            <label class="form-label">Photo</label>
            <input  type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn btn-secondary text-light w-100 mb-3"><i class="fas fa-user-check"></i></button>
    </form>
</section>
@endsection