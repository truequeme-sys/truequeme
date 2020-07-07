<?php

namespace App\Http\Controllers;

use App\Giro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiroController extends Controller
{
    public function store(Request $request){

        $user = Auth::user();

        $giro = Giro::firstOrNew([
            'user_id' => $user->id
        ]);

        $giro->nombre = $request->nombre;
        $giro->save();

        return redirect()->back();
    }
}
