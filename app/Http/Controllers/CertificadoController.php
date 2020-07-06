<?php

namespace App\Http\Controllers;

use App\Certificado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificadoController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();
        
        $certificado = Certificado::firstOrNew([ 'user_id' => $user->id ]);
        $certificado->nombre = $request->nombre;
        $certificado->institucion = $request->institucion;
        $certificado->fecha_expedicion = $request->fecha_expedicion;
        $certificado->fecha_expiracion = $request->fecha_expiracion;
        $certificado->pais = $request->pais;
        $certificado->user_id = $user->id;
        $certificado->save();

        return redirect()->route('perfil.edit');
    }
}
