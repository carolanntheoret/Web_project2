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

        if(!Auth::attempt($request->only('email', 'password'))) return back()->with('wrong_login', "incorrect informations");
        if(auth()->user()->admin == 1) return redirect('/admin');
        return redirect('/user-zone');
    }

    /**
     * Disconnect a user
     *
     * @return object
     */
    public function disconnect()
    {
        auth()->logout(auth()->user());
        return redirect('/')->with('logout_successful', 'Log out successfully');
    }

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
            'password' => 'required|max:255',
            'password_confirmation' => 'required|confirmed|max:255',
        ]);

        $admin = $request->admin == NULL ? false : true;
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->admin = $admin;

        $user->save();

        if(Auth::check() && auth()->user()->admin == 1) return redirect('/admin')->with('creation_successful','Account created with success');

        auth()->login($user);
        return view('spaceUser', ['user' => auth()->user()])->with('creation_successful', 'Account created with success');
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
