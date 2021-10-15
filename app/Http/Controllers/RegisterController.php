<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }


    public function traitement()
    {
        $user = new \App\Models\User;
        $user->email = request('email');
        $user->pseudo = request('pseudo');
        $user->password = bcrypt(request('password'));

        $user->save();
        /*request() ->validate([
            'email' => ['required', 'email'],
            'pseudo' => ['required', 'pseudo'],
            'password' => ['required'],
        ]);

        auth()->attempt([
            'email' => request('email'),
            'pseudo' => request('pseudo'),
            'password' => request('password'),
        ])*/
    }
}
