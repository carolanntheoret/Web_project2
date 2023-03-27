<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return back()->with('logout_successful', 'Log out successfully');
    }

    /**
     * Create a user in the database
     *
     * @param Request $request
     * @return object
     */
    public function create(Request $request)
    {
        if(auth()->check()) return back();

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|max:255',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->admin = $request->admin == "true" ? 1 : 0;

        $user->save();

        if(Auth::check() && auth()->user()->admin == 1) return redirect('/admin')->with('creation_successful','Account created with success');

        auth()->login($user);
        return redirect('my-tickets');
    }

    /**
     * Modify a user in the database
     *
     * @param Request $request
     * @return void
     */
    public function modify(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone');
        if(!auth()->user()->admin) return back();

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'max:255',
            'id' => 'required',
        ]);

        $success = User::where('id', '=', $request->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password == null ? DB::table('users')->select('password')->where('id', '=', $request->id)->first()->password : Hash::make($request->password)
        ]);

        if(!$success) return back()->with('modify_error', 'An error occurred while updating the user');
        return back()->with('modify_success', 'Modification successful');
    }

    /**
     * Delete a user !
     *
     * @param Request $request
     * @return object
     */
    public function delete(Request $request)
    {
        if(!auth()->user()->admin) return back();
        if(!User::find($request->id)) return back()->with('user_missing', "User not found");
        if(User::where('id', $request->id)->delete()) return back()->with(['delete_successful', 'The account has been deleted sucessfully']);
        return back()->withInput(['delete_fail', 'AN error occurred while deleting the account']);
    }
}
