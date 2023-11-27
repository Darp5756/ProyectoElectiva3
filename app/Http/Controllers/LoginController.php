<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioValidar;
use App\Http\Requests\Inicio_Validar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Vista_Registro ()
    {
        return view('sesion');
    }

    public function Registro (UsuarioValidar $request)
    {
        $requestAll = $request->all();
        $requestAll['clave'] = Hash::make($request->clave);
        Usuario::create($requestAll);
        return redirect()->route('vista.login')->withSuccess('Usuario registrado exitosamente');
    }

    public function Vista_Login ()
    {
        return view('login');
    }

    public function Login(Inicio_Validar $request)
    {
        $usuario = Usuario::where('usuario', $request->usuario)->first();
        if (!$usuario) {
            return redirect()->back()->withError('El usuario ingresado no existe');
        }

        $clave_valida = Hash::check($request->clave, $usuario->clave);
        if (!$clave_valida) {
            return redirect()->back()->withError('La clave ingresada es inválida');
        }

        if (!$usuario->activo) {
            return redirect()->back()->withError('El usuario se encuentra inactivo');
        }

        $request->session()->put('id_usuario', $usuario->id_usuario);
        return redirect()->route('vista.inicio')->withSuccess('Bienvenido');
    }

    public function Vista_Inicio ()
    {
        return view('short');
    }

    public function Logout (Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('vista.login')->withSuccess('Sesión finalizada exitosamente');
    }
}
