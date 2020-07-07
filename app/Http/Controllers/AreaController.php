<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    public function store(Request $request){

        $user = Auth::user();

        $area = Area::firstOrNew([
            'user_id' => $user->id
        ]);

        $area->descripcion = $request->descripcion;
        $area->user_id = $user->id;

        $area->save();

        return redirect()->back();
    }
}
