<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use App\Artefacto;
use App\Categoria;
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
        $user->razon_social = $request->razon_social;

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
    public function trueques()
    {
        $user= Auth::user();
        $artefactos = Artefacto::orderBy('created_at', 'desc');
        $artefactos=$artefactos->where('user_id',$user->id )->get();
        $categorias=Categoria::get();
        $empresas=Auth::user()->empresas()->get();
       return view('perfil.trueques', compact('artefactos','categorias','empresas'));
        # code...
    }
}
