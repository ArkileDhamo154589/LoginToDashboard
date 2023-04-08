<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laravel_users;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function registration(Request $request)
    {
        $request->validate([
            'email' => 'unique:laravel_users',
            'username' => 'unique:laravel_users'
        ]);
        $user = new laravel_users();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->username = $request->user;
        $user->password = Hash::make($request->pass);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Registration completed');
            return redirect('/');
        } else {
            return back()->with('fail', 'Something went wrong! Please try again');
        }
    }

    public function loginUser(Request $request)
    {
        $user = laravel_users::where('username', '=', $request->username)->first();
        if ($user) {
            if (Hash::check($request->pass, $user->password)) {
                $request->session()->put('loginId', $user->username);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This user does not exist');
        }
    }

    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = laravel_users::where('username', '=', Session::get('loginId'))->first();
        }
        return view ('dashboard', compact('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('welcome');
        }
    }
}
