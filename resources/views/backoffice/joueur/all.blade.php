@extends('layout.app')

@section('content')


<<<<<<< HEAD
<section>
    <table class="table table-dark text-light">
=======
<section class="container">
    <table class="table table-dark text-white">
>>>>>>> 689f76351706444196ca2a524b3b37c8eda63f38
        <thead>
          <tr>
            <th class="text-light" scope="col">#</th>
            <th class="text-light" scope="col">nom</th>
            <th class="text-light" scope="col">prenom</th>
            <th class="text-light" scope="col">email</th>
            <th class="text-light" scope="col">numero</th>
            <th class="text-light" scope="col">age</th>
            <th class="text-light" scope="col">genre</th>
            <th class="text-light" scope="col">pays</th>
            <th class="text-light" scope="col">equipe</th>
            <th class="text-light" scope="col">role</th>

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
        <td>{{ $joueur->genre -> type }}</td>
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
<div class="ms-4 mt-2">
  {{ $joueurs->links() }}
</div>
  <div class="d-flex justify-content-end me-2 ">
     <a href={{ route("joueurs.create") }} class=" btn btn-sm btn-secondary text-white"><i class="fas fa-user-plus"></i></a>
  </div>
@endsection
