<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Connect a user
     *
     * @param Request $request
     * @return object
     */
    public function connect(Request $request)
    {
        if(auth()->check()) return back();

        $request->validate([
            'email' => "required|max:255",
            'password' => "required|max:255",
        ]);

        if(!Auth::attempt($request->only('email', 'password'))) return redirect('/')->with('wrong_login', "incorrect informations");
        $this->redirectSpace();
    }

    /**
     * Disconnect a user
     *
     * @return object
     */
    public function disconnect()
    {
        auth()->logout(auth()->user());
        return redirect('/')->with('logout_successful', 'Déconnexion réussie');
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

    /**
     * Undocumented function
     *
     * @param [type] $admin
     * @return void
     */
    public function redirectSpace()
    {
        if(auth()->user()->admin) return view('spaceAdmin', auth()->user());
        return view('spaceUser', auth()->user());
    }
}
