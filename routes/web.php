<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return redirect('/films');
});

Route::get('/test-simple', function () {
    return 'Server is working!';
});

Route::get('/films', function () {
    $films = DB::table('films')->get();
    return view('films.index', compact('films'));
});

Route::get('/films/{id}', function ($id) {
    $film = DB::table('films')->where('id', $id)->first();
    return view('films.show', compact('film'));
});

Route::get('/films/{id}/acteurs', function ($id) {
    $acteurs = DB::table('acteurs')
        ->join('participations', 'acteurs.id', '=', 'participations.acteur_id')
        ->where('participations.films_id', $id)
        ->select('acteurs.nom', 'acteurs.prenom', 'participations.role', 'participations.typeRole')
        ->get();
    
    $film = DB::table('films')->where('id', $id)->first();
    
    return view('films.acteurs', compact('film', 'acteurs'));
});
