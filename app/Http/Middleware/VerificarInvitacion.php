<?php

namespace App\Http\Middleware;

use App\Invitacion;
use App\User;
use Closure;

class VerificarInvitacion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $email, $token)
    {
        if ($this->elInvitadoEsUnUsuario($email)) {
            return redirect('/login');
        }

        if (!$this->estaInvitado($email, $token)) {
            return redirect('/');
        }

        return $next($request);
    }

    public function estaInvitado($email, $token)
    {
        return Invitacion::where('email', $email)->where('token', $token)->exists();
    }

    public function elInvitadoEsUnUsuario($email)
    {
        return User::where('email', $email)->exists();
    }
}
