@extends('layout.app')

@section('content')


<section>
    <table class="table table-dark text-light">
        <thead>
          <tr>
            <th class="text-light" scope="col">#</th>
            <th class="text-light" scope="col">Nom</th>
            <th class="text-light" scope="col">Ville</th>
            <th class="text-light" scope="col">Pays</th>
            <th class="text-light" scope="col">ATT</th>
            <th class="text-light" scope="col">CT</th>
            <th class="text-light" scope="col">DC</th>
            <th class="text-light" scope="col">RP</th>
            <th class="text-light" scope="col">Continent</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($equipes as $equipe)
    <tr>
        <th scope="row">{{ $equipe->id }}</th>
        <td>{{ $equipe->nom }}</td>
        <td>{{ $equipe->ville }}</td>
        <td>{{ $equipe->pays }}</td>
        <td>{{ $equipe->ATT }}</td>
        <td>{{ $equipe->CT }}</td>
        <td>{{ $equipe->DC }}</td>
        <td>{{ $equipe->RP }}</td>
        <td>{{ $equipe->continent -> nom }}</td>
        <td></td>
        <td>
            <div class="d-flex">
                <a class="btn btn-dark text-white" href={{ route("equipes.show", $equipe->id) }}>Show</a>
                <a class="btn btn-dark text-white" href={{ route("equipes.edit", $equipe->id) }}>Edit</a>
                <form action="{{ route("equipes.destroy",$equipe->id) }}" method="post">
                  @csrf
                  @method("delete")
                    <button class="btn btn-dark text-white mx-1" type>Delete</button>
                </form>
              </div>
        </td>
      </tr>
    @endforeach
        </tbody>
      </table>
</section>
<div>
  {{ $equipes->links() }}
</div>
<div class="d-flex justify-content-end me-2 ">
        <a href={{ route("equipes.create") }} class=" btn btn-sm btn-secondary text-white"><i class="fas fa-user-plus"></i></a>
</div>
@endsection
