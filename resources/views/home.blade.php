@extends('layout.app')
@section('content')
 
<div class="container">
    <h1 class="text-danger text-center my-5">Volley ball </h1>
</div>
<div class="container d-flex">
    <img src={{ asset("img/papiers.jpg.jpg") }} alt="p" class="img-fluid">
</div>

<section class="container">
    <h1 class="text-warning">Equipes <i class="fas fa-volleyball-ball"></i></h1>
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-white">Europe</h2>
        </div>
        <div class="col-sm-6">
            <h2 class="text-white">Hors Europe</h2>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-warning">Equipe Complète <i class="fas fa-tint"></i></h1>
   <div class="row">
       <div class="col-sm-4">
           <h2 class="text-white">Equipe Remplie</h2>
           <ul>
       
            </ul>
           
       </div>
       <div class="col-sm-4">
           <h2 class="text-white">Equipe Féminine</h2>
       </div>
       <div class="col-sm-4">
           <h2 class="text-white">Equipe Masculine</h2>
       </div>
   </div>
</section>


<section class="container">
    <h1 class="text-warning">Equipe Incomplète <i class="fab fa-unsplash"></i></h1>
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-white">Equipe 1: Incomplète</h2>
        </div>
        <div class="col-sm-6">
            <h2 class="text-white">Equipe 2: Incomplète</h2>
        </div>
    </div>
</section>

<section class="container">
    <h1 class="text-warning">Joueurs <i class="fas fa-bolt"></i></h1>
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-white">Joueurs avec equipe</h2>
            <i class="far fa-id-badge"></i>
            <i class="far fa-id-badge"></i>
            <i class="far fa-id-badge"></i>
            <i class="far fa-id-badge"></i>
        </div>
        <div class="col-sm-6">
            <h2 class="text-white">Joueurs Sans équipe</h2>
            <i class="far fa-id-badge"></i>
            <i class="far fa-id-badge"></i>
            <i class="far fa-id-badge"></i>
            <i class="far fa-id-badge"></i>
        </div>
    </div>

</section>


@endsection