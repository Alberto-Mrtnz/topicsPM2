<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iluminate\Support\Facades\Auth;
use App\Models\user;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

    }

    public function create(Request $request) {
        $datosVerificados = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'birthday' => 'required',
        ]);

        if(User::create($datosVerificados)) {
            return redirect('/');
        }

        return back()->withErrors([
            'email'=>'Correo incorrecto',
            'password'=>'Mo es tu contreseña',
        ]);
    }
}
