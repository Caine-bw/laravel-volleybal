@extends('layout.app')
@section('content')

    <div class="container">
        <h1 class="text-danger text-center my-5" >User</h1>
        <a href={{ route("users.create") }} class="btn btn-success "> Créer</a>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Photo de profil</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
   
            <tr>
              <th scope="row">{{ $user->id }}</th>
              <td><a href="/users/{{ $user->id }}">{{ $user->nom}}</a></td>
              <td>{{ $user->prenom }}</td>
              <td>{{ $user->age }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->mdp }}</td>
              <td><img style="width : 200px" src={{ asset('img/'. $user->pdp) }} alt=""></td>
              <td>
                  <div class="d-flex ">
                      <a href="/users/{{ $user->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                    <form action="/users/{{ $user->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                    </form>
                    <form action="/users/{{ $user->id }}/download" method="POST">
                        @csrf
                        <button class="btn btn-warning mx-1" type="submit">Download</button>
                    </form>
                  </div>
              </td>

            </tr>
            @endforeach
          
        </tbody>
      </table>
      <div>
          {{ $users->links() }}
      </div>
    </div>
@endsection