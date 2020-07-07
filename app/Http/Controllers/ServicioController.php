<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicioController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $servicio = Servicio::firstOrNew([
            'user_id' => $user->id
        ]);

        $servicio->nombre = $request->nombre;
        $servicio->caracteristicas = $request->caracteristicas;
        $servicio->costo = $request->costo;
        $servicio->lugar_entrega = $request->lugar_entrega;
        $servicio->categoria = $request->categoria;
        $servicio->tiene_garantia = $request->tiene_garantia;
        $servicio->user_id = $user->id;

        $servicio->save();

        return redirect()->back();
    }
}
