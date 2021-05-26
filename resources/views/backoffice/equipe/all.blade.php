@extends('layout.app')

@section('content')


<section>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Ville</th>
            <th scope="col">Pays</th>
            <th scope="col">ATT</th>
            <th scope="col">CT</th>
            <th scope="col">DC</th>
            <th scope="col">RP</th>
            <th scope="col">Continent</th>
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
        <td>{{ $equipe->continent_id }}</td>
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
@endsection
