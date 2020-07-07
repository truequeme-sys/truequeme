<?php

namespace App\Http\Controllers;

use App\ZonaTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZonaTrabajoController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        $zonaTrabajo = ZonaTrabajo::firstOrNew([
            "user_id" => $user->id
        ]);

        $zonaTrabajo->descripcion = $request->descripcion;
        $zonaTrabajo->save();

        return redirect()->back();
    }
}
