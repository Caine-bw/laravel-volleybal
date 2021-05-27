@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card" style="width:400px">
        <div class="card-body">
            <p>{{ $equipe->id }} </p>
            <p>{{ $equipe->nom }} </p>
            <p>{{ $equipe->ville }} </p>
            <p>{{ $equipe->pays }} </p>
            <p>{{ $equipe->ATT }} </p>
            <p>{{ $equipe->CT }} </p>
            <p>{{ $equipe->DC }} </p>
            <p>{{ $equipe->RP }} </p>
            <p>{{ $equipe->continent_id }}</p>
        </div>
        <div class="d-flex justify-content-center">
            <a href={{ route("equipes.index") }} class="mb-3 btn btn-secondary text-white"><i class="fas fa-arrow-alt-circle-left"></i></a>
        </div>
    </div>
    </div>
    
</div>
@endsection