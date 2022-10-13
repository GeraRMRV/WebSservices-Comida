<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Restaurante;

class LoginController extends Controller
{
    //
    public function serviceLogin(Request $request)
    {
        //tipo icono 1-succes, 2-warning, 3-danger
        $request->validate([
            'email'         => 'required',
            'password'      => 'required',
        ]);
        $credenciales = $request->only('email', 'password'); //obtiene solo esos dos datos
        if (Auth::attempt($credenciales)) {
            $token = Str::random(60);
            $restaurante = Restaurante::where('email', Auth::user()->email)->get();
            Auth::user()->forceFill(['api_token' => hash('sha256', $token)])->save();
            return json_encode(['token' => $token, 'userdata' => Auth::user(), 'restaurante' => $restaurante, 'respuesta' => 'Bienvenido']);
        }
        return json_encode(['respuesta' => 'Credenciales invalidas']);
    }
}
