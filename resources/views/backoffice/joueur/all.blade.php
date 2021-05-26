@extends('layout.app')

@section('content')


<section>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">numero</th>
            <th scope="col">age</th>
            <th scope="col">genre_id</th>
            <th scope="col">pays</th>
            <th scope="col">equipe</th>
            <th scope="col">role</th>
 
          </tr>
        </thead>
        <tbody>
    @foreach ($joueurs as $joueur)
    <tr>
        <th scope="row">{{ $joueur->id }}</th>
        <td>{{ $joueur->nom }}</td>
        <td>{{ $joueur->prenom }}</td>
        <td>{{ $joueur->email }}</td>
        <td>{{ $joueur->numero }}</td>
        <td>{{ $joueur->age }}</td>
        <td>{{ $joueur->role_id }}</td>
        <td>{{ $joueur->genre_id }}</td>
        <td>{{ $joueur->pays }}</td>
        <td></td>
        <td>
            <div class="d-flex">
                <a class="btn btn-dark text-white" href={{ route("joueurs.show", $joueur->id) }}>Show</a>
                <a class="btn btn-dark text-white" href={{ route("joueurs.edit", $joueur->id) }}>Edit</a>
                <form action="{{ route("joueurs.destroy",$joueur->id) }}" method="post">
                  @srf
                  @method("delete")
                    <button class="btn btn-dark text-white mx-1" type>Delete</button>
                </form>
              </div>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>

    @endforeach
        
        </tbody>
      </table>
</section>
@endsection
