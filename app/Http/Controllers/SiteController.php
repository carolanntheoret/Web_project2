<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    /**
     * Connect a user
     *
     * @param Request $request
     * @return object
     */
    public function connect(Request $request)
    {
        // if(auth()->check()) return back();

        // $request->validate([
        //     'email' => "required|max:255",
        //     'password' => "required|max:255",
        // ], [
        //     'email.required' => "Email manquant",
        //     'email.max' => "Email trop long",
        //     'password.required' => "Mot de passe manquant",
        //     'password.max' => "Mot de passe trop long",
        // ]);

        // if(!Auth::attempt($request->only('email', 'password'))) return redirect('/')->with('wrong_login', "Informations incorrectes");
        //return redirect("/")->with('login_or_creation_successful', 'Connexion réussie'); // revoir la redirection, peut-être plusieurs pages selon le rôle

        return view('spaceUser');
    }

    /**
     * Disconnect a user
     *
     * @return object
     */
    public function disconnect()
    {
        //auth()->logout(auth()->user());
        //return redirect('homepage')->with('logout_successful', 'Déconnexion réussie');

        return redirect('/');
    }


    /**
     * Show the list of activities
     */
    public function list_activities()
    {
        return view('activities');
    }
}
