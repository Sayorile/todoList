<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function connexion()
    {
        return view('connexion');
    }


    public function traitement()
    {
        request()->validate([
            'pseudo' => ['required'],
            'password' => ['required'],
        ]);

        $result= auth()->attempt([
            'pseudo' => request('pseudo'),
            'password' => request('password'),
        ]);

        if($result)
        {
            return redirect('/account');
        }

        return back();
    }
}
