<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index () {
        return view('Session/login');
    }

    function login(Request $request) {

        Session::flash('email', $request->email);
        $request->validate([
            'email'=> 'required',
            'password'=> 'required|min:6',
        ]);

        $infoLogin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infoLogin)) {
            return redirect('/dashboard')->with('success', 'hello admin ^_^');
        } else {
            return redirect('/')->withErrors('Email or Password is not valid');
        }
    }

    function logout() {
        Auth::logout();
        return redirect('/')->with('success', 'your logout, see you next time ^_-');
    }

    function register() {
        return view('Session.register');
    }

    function create(Request $request) {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6',
        ], [
            'email.email' => 'email is not valid'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        return redirect('/')->with('success', 'amazing, login now!');
    }
}
