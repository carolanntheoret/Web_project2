<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Create a user in the database
     *
     * @param Request $request
     * @return object
     */
    public function createUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|max:255'
        ], [
            'first_name.required' => 'Un prénom est requis',
            'last_name.required' => 'Un nom est requis',
            'email.required' => 'Un email est requis',
            'password.required' => 'Un mot de passe est requis',

            'first_name.max' => 'Le prénom ne peut contenir que 255 caractères',
            'last_name.max' => 'Le nom ne peut contenir que 255 caractères',
            'email.max' => "L'email' ne peut contenir que 255 caractères",
            'password.max' => 'Le mot de passe ne peut contenir que 255 caractères',

            'email.email' => "L'email doit être valide",
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();

        // section à tester avec la connexion
        var_dump(auth()->user()); exit();
        if(auth()->user()->role != 'user') return redirect('/')->with('creation_successful','Compte créé avec succès'); // admin account creation page

        auth()->login($user);
        return redirect('/')->with('creation_successful','Compte créé avec succès');
    }

    public function deleteUser(Request $request)
    {
        if(User::where('id', $request->id)->delete()) return back()->withInput(['delete_successful', 'Le compte a été supprimé avec succès']);
        return back()->withInput(['delete_fail', 'La suppression a échouée']);
    }
}
