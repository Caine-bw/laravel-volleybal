@extends('layout.app')

@section('content')
<section class="container text-light">
<ul class="bg-danger rounded">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<h2 class="text-center text-light text-decoration-underline my-3">Edit une Equipe</h2>
    <form action="{{ route('equipes.update', $equipe->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input value="{{ $equipe->nom }}" type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input value="{{ $equipe->ville }}" type="text" class="form-control" name="ville">
        </div>
        <div class="mb-3">
            <label class="form-label">pays</label>
            <input value="{{ $equipe->pays }}" type="text" class="form-control" name="pays">
        </div>
        <div class="mb-3">
            <label class="form-label">ATT</label>
             <input value="{{ $equipe->ATT }}" type="number" class="form-control" name="ATT">
        </div>
        <div class="mb-3">
            <label class="form-label">CT</label>
             <input value="{{ $equipe->CT }}" type="number" class="form-control" name="CT">
        </div>
        <div class="mb-3">
            <label class="form-label">DC</label>
             <input value="{{ $equipe->DC }}" type="number" class="form-control" name="DC">
        </div>
        <div class="mb-3">
            <label class="form-label">RP</label>
             <input value="{{ $equipe->RP }}" type="number" class="form-control" name="RP">
        </div>
        <div class="mb-3">
            <label class="form-label">Continent</label>
             <input value="{{ $equipe->continent_id }}" type="number" class="form-control" name="continent_id">
        </div>
        <button type="submit" class="btn btn-secondary text-white w-100"><i class="fas fa-arrow-alt-circle-left"></button>
        </section>
@endsection