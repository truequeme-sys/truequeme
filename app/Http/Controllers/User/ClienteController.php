<?php

namespace App\Http\Controllers\User;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $clientes = Cliente::firstOrNew([
            "user_id" => $user->id
        ]);

        $clientes->descripcion = $request->descripcion;
        $clientes->save();

        return redirect()->back();
    }
}
