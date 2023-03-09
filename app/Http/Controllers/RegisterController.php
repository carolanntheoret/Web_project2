<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    //affiche form d'inscription
    public function showRegistrationForm()
    {
        //return view('auth');
        return view('auth.enregistrement');
    }

  /**
     * Traite les données d'un nouvel enregistrement
     *
     * @param Request $request Données reçues
     */
    public function store(Request $request)
    {


        $request->validate( [
            'name' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'password-confirm' => 'required|same:password',

        ], [
            'name.required' => 'Le nom est requis',
            'email.required' => 'Le courriel est requis',
            'email.email' => 'Le courriel doit être valide',
            'email.unique' => 'Ce courriel existe déjà',
            'password.required' => 'Le mot de passe est requis',
            'password-confirm.required' => 'La confirmation du mot de passe est requise',
            'password-confirm.same' => 'La confirmation du mot de passe ne correspond pas au mot de passe entré',
        ]);
        // Création d'un nouvel utilisateur
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        // Encryption du mot de passe
        $user->password = Hash::make($request->password);

        // Sauvegarde des données
        $user->save();

        // Connexion de l'utilisateur (plutôt que de le rediriger à la connexion)
        auth()->login($user);

        // Redirection vers la page chatbox après l'enregistrement
        return redirect()->route('chatbox')->with('succes-creation', 'Enregistrement réussi!');
            }
}
