@extends('layout.app')

@section('content')
<section class="container">
<h2 class="text-center text-decoration-underline my-3">Cree une Equipe</h2>
<ul>
    @foreach ($errors->all() as $message) 
        <li>{{ $message }}</li>
    @endforeach
</ul>

<form action="{{ route('equipes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom">
    </div>
    <div class="mb-3">
        <label class="form-label">Ville</label>
        <input vt type="text" class="form-control" name="ville">
    </div>
    <div class="mb-3">
        <label class="form-label">pays</label>
        <input t type="text" class="form-control" name="pays">
    </div>
    <div class="mb-3">
        <label class="form-label">ATT</label>
         <input type="number" class="form-control" name="ATT">
    </div>
    <div class="mb-3">
        <label class="form-label">CT</label>
         <input type="number" class="form-control" name="CT">
    </div>
    <div class="mb-3">
        <label class="form-label">DC</label>
         <input type="number" class="form-control" name="DC">
    </div>
    <div class="mb-3">
        <label class="form-label">RP</label>
         <input type="number" class="form-control" name="RP">
    </div>
    <div class="mb-3">
        <label class="form-label">Continent</label>
         
         <select class="form-control" name="continent_id" id="">
            @foreach($continents  as $continent)

            <option  value="{{ $continent -> id }}">{{ $continent -> nom }}</option>
                
            @endforeach
         </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</section>
@endsection