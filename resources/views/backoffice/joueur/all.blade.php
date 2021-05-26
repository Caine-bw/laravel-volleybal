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
            <th scope="col">tel</th>
            <th scope="col">age</th>
            <th scope="col">genre</th>
            <th scope="col">pays</th>
            <th scope="col">equipe</th>
            <th scope="col">role</th>
            <th scope="col">continent</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($joueurs as $joueur)
    <tr>
        <th scope="row">{{ $joueur->id }}</th>
        <td>{{ $joueur->nom }}</td>
        <td>{{ $joueur->prenom }}</td>
        <td>
            <div>
                <a href=""></a>
                <form action="">

                </form>
                    @srf
                    @method("delete")
                    <button class="btn btn-dark text-white mx-1" type>Delete</button>
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
