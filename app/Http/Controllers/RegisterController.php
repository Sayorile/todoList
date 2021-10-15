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
        request()->validate([
            'pseudo' => ['required'],
            'password' => ['required'],
        ]);
        try {
            $user = new \App\Models\User;
            $user->email = request('email');
            $user->pseudo = request('pseudo');
            $user->password = bcrypt(request('password'));

            $user->save();
        } catch(\Illuminate\Database\QueryException $ex){
            return redirect('/register'); 
        }

        /*} catch(\Illuminate\Database\QueryException $ex){
            if(str_contains($ex->getMessage(), 'pseudo'));
            {
                return redirect('/register');
            }
        }*/
    }
}
