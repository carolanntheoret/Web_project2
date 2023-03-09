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
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->admin;

        $user->save();

        // section à tester avec la connexion
        var_dump(auth()->user()); exit();
        if(auth()->user()->admin != 'user') return redirect('/')->with('creation_successful','Account created with success'); // admin account creation page

        auth()->login($user);
        return redirect('/')->with('creation_successful','');
    }

    /**
     * Delete a user !
     *
     * @param Request $request
     * @return void
     */
    public function deleteUser(Request $request)
    {
        if(!auth()->user()->admin) return back();
        if(!User::find($request->id)) return back()->with('user_missing', "L'utilisateur est introubable");
        if(User::where('id', $request->id)->delete()) return back()->with(['delete_successful', 'Le compte a été supprimé avec succès']);
        return back()->withInput(['delete_fail', 'La suppression a échouée']);
    }
}
