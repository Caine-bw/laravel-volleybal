<?php

use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Routes pour les joueurs 

// Route::get('/,JoueurController@index')->name('joueur.index');
// Route::get('/joueur-create', 'Joueur@create')->name("joueurs.create");
// Route::get('/joueur-show', 'JoueurController@show')->name('joueurs.show');
// Route::get('/joueur-edit','JoueurController@edit')->name('joueurs.edit');


// Route genre
