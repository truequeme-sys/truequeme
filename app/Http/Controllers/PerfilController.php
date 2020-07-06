<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class PerfilController extends Controller
{
    public function index()
    {
        return view('perfil.index');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('perfil.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        $user->telefono = $request->telefono;
        $user->celular = $request->celular;
        $user->rfc = $request->rfc;
        $user->codigo_postal = $request->ubicacion;

        if($request->nombre_empresa){
            $empresa = $user->empresa()->first() ?: new Empresa;
            // $empresa = $user->empresa()->firstOrNew(['user_id' => $user->id]);
            $empresa->nombre = $request->nombre_empresa;
    
            $empresa->save();
            $user->empresa_id = $empresa->id;
        }

        

        if( $request->file('foto') ){
            $foto = $request->user()->id . "." . $request->foto->getClientOriginalExtension();
            $request->file('foto')->storeAs(
                'public/fotos', $foto
            );
            $user->foto = $foto;
        }

        $user->save();

        return redirect()->route('perfil.edit');
    }
}
