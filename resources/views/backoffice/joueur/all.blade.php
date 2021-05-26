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
        <td>{{ $joueur->genre_id }}</td>
        <td>{{ $joueur->pays }}</td>
        <td>{{ $joueur->equipe-> nom}}</td>
        <td>{{ $joueur->role -> nom }}</td>
        <td></td>
        <td>
            <div class="d-flex">
                <a class="btn btn-dark text-white" href={{ route("joueurs.show", $joueur->id) }}>Show</a>
                <a class="btn btn-dark text-white" href={{ route("joueurs.edit", $joueur->id) }}>Edit</a>
                <form action="{{ route("joueurs.destroy",$joueur->id) }}" method="post">
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
  {{ $joueurs->links() }}
</div>
  <div class="d-flex justify-content-end me-2 ">
     <a href={{ route("joueurs.create") }} class=" btn btn-sm btn-secondary text-white"><i class="fas fa-user-plus"></i></a>
  </div>
@endsection
