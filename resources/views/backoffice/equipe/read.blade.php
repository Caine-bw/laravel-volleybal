@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width:400px">
        <div class="card-body">
            <p class="fs-5">Nom:  {{ $equipe->nom }} </p>
            <p class="fs-5">Ville:  {{ $equipe->ville }} </p>
            <p class="fs-5">Pays:  {{ $equipe->pays }} </p>
            <p class="fs-5">ATT:  {{ $equipe->ATT }} </p>
            <p class="fs-5">CT:  {{ $equipe->CT }} </p>
            <p class="fs-5">DC:  {{ $equipe->DC }} </p>
            <p class="fs-5">RP: {{ $equipe->RP }} </p>
            <p class="fs-5">Continent: {{ $equipe->continent-> nom}}</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href={{ route("equipes.index") }} class="mb-3 btn btn-secondary text-white w-100 "><i class="fas fa-arrow-alt-circle-left"></i></a>
        </div>
    </div>
    </div>
</div>
@endsection