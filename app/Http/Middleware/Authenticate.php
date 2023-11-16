<?php

namespace App\Http\Middleware;

use App\Models\Usuario;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if ($request->session()->exists('id_usuario')) {
            //Cargar la información de autenticación desde la sesión si está disponible
            $usuario = Usuario::find($request->session()->get('id_usuario'));
            //Establecer la información de autenticación en el objeto Auth
            Auth::login($usuario);
        }

        return $next($request);
    }
}
