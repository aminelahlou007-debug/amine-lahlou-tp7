<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function create()
    {
        return view('etudiant.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'type_bac' => 'required',
            'filiere' => 'required',
        ], [
            'nom.required' => 'Veuillez saisir le nom.',
            'prenom.required' => 'Veuillez saisir le prénom.',
            'email.required' => 'Veuillez saisir un email.',
            'email.email' => 'Veuillez saisir un email valide.',
            'password.required' => 'Veuillez saisir un mot de passe.',
            'password.min' => 'Minimum 6 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'type_bac.required' => 'Veuillez choisir un type de bac.',
            'filiere.required' => 'Veuillez choisir une filière.',
        ]);

        return redirect()->route('etudiant.create')->with('success', 'Étudiant ajouté avec succès !');
    }
}
