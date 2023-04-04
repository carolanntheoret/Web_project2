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
        if(auth()->check()) return back()->with('error', "You're already logged in");

        $request->validate([
            'email' => "required|max:255",
            'password' => "required|max:255",
        ]);

        if(!Auth::attempt($request->only('email', 'password'))) return back()->with('error', "incorrect informations");
        if(auth()->user()->admin == 1) return redirect('/admin')->with('You are logged in');
        return redirect('/my-tickets')->with('You are logged in');
    }

    /**
     * Disconnect a user
     *
     * @return object
     */
    public function disconnect()
    {
        auth()->logout(auth()->user());
        return redirect('/user-zone')->with('success', 'Log out successfully');
    }

    /**
     * Create a user in the database
     *
     * @param Request $request
     * @return object
     */
    public function create(Request $request)
    {
        if(auth()->check() && auth()->user()->admin == 0) return back()->with('error', "You're not logged in or you are not allowed to get these informations");

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
        $user->admin = $request->admin == 1 ? 1 : 0;

        $user->save();

        if(Auth::check() && auth()->user()->admin == 1) return redirect('/admin')->with('success','Account created with success');

        auth()->login($user);
        return redirect('my-tickets')->with('success', 'Account created with success');
    }

    /**
     * Modify a user in the database
     *
     * @param Request $request
     * @return void
     */
    public function modify(Request $request)
    {
        if(!auth()->check()) return redirect('/user-zone')->with('error', "You're not logged in");
        if(!auth()->user()->admin) return back()->with("error", "Access denied");

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

        if(!$success) return back()->with('error', 'An error occurred while updating the user');
        return back()->with('success', 'Modification successful');
    }

    /**
     * Delete a user
     *
     * @param Request $request
     * @return object
     */
    public function delete(Request $request)
    {
        if(!auth()->user()->admin) return back()->with("error", "Access denied");
        if(!User::find($request->id)) return back()->with('error', "User not found");
        if(User::where('id', $request->id)->delete()) return back()->with(['success', 'The account has been deleted sucessfully']);
        return back()->withInput(['error', 'An error occurred while deleting the account']);
    }
}
