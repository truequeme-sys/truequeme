<?php

namespace App\Http\Controllers;

use App\Artefacto;
use App\Empresa;
use App\Giro;
use App\Servicio;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TruequeController extends Controller
{

    public function index(Request $request)
    {
        $artefactos = Artefacto::orderBy('created_at', 'desc');
        $empresas = Empresa::get();

        if ($request->necesita_u_ofrece) {
            $artefactos->where('necesita_u_ofrece', strtolower($request->necesita_u_ofrece));
        }

        if ($request->empresa) {

            // dd( $artefactos->get()->pluck('empresa') );

            $artefactos = $artefactos->whereHas('empresa', function (Builder $query) use ($request) {
                return $query->where('id', $request->empresa);
            });

            // dd($artefactos->get());
        }

        if ($request->servicio) {
            $artefactos = $artefactos->where('tipo', 'servicio')
                ->where('titulo', 'like', '%' . $request->servicio . '%');
        }

        if ($request->busqueda) {
            $artefactos = $artefactos->where('titulo', 'like', '%' . $request->busqueda . '%');
        }

        $users = $artefactos->get()->pluck('user')->flatten()->pluck('id')->flatten();
        $users = User::whereIn('id', $users);

        return view('trueques.index', [
            'artefactos' => $artefactos->paginate(8, ['*'], 'artefactos')->appends($request->input()),
            'users' => $users->paginate(8,['*'], 'users')->appends($request->input()),
            'empresas'=> $empresas,
            'servicios' => Servicio::get(),
            'giros' => Giro::get(),
        ]);
    }

    public function create(Request $request)
    {
        $user= Auth::user();
        $artefacto= new Artefacto(
            array(
                  'user_id'=> $user->id ,
                  'empresa_id'=>$request->empresa_nuevo,
                  'titulo' => $request->titulo_nuevo,
                  'validez'=>$request->fecha_nuevo,
                  'categoria_id'=>$request->Categoria_nuevo,
                  'comentario'=>$request->Comentario_nuevo,
                  'tipo'=>$request->Tipo_nuevo)
        );
        if ($request->Ofrezco_editar==1) {
            $artefacto->necesita_u_ofrece="ofrece";
        }
        if ($request->Necesito_editar==1) {
            $artefacto->necesita_u_ofrece="necesita";
        }

        if( $request->file('foto_nuevo') ){
            $foto = $request->user()->id . "." . $request->foto_nuevo->getClientOriginalExtension();
            $request->file('foto_nuevo')->storeAs(
                'public/fotos', $foto
            );
            $artefacto->imagen = $foto;
        }
        $artefacto->save();
        return redirect()->route('MisTrueques');
    }
    public function edit(Request $request)
    {
        $artefacto=Artefacto::where("id",$request->input("id_edit"))->first();
        if ($request->Ofrezco_editar==1) {
            $artefacto->necesita_u_ofrece="ofrece";
        }
        if ($request->Necesito_editar==1) {
            $artefacto->necesita_u_ofrece="necesita";
        }
        if ($request->Tipo_editar) {
            $artefacto->tipo=$request->Tipo_editar;
        }
        if ($request->fecha_edit) {
            $artefacto->validez=$request->fecha_edit;
        }
        if ($request->Categoria_editar) {
            $artefacto->categoria_id=$request->Categoria_editar;
        }
        if ($request->Comentario_edit) {
            $artefacto->comentario=$request->Comentario_edit;
        }
        $artefacto->save();
        return redirect()->route('MisTrueques');
    }
    public function eliminarArtefacto(Request $request)
    {
        $artefacto=Artefacto::where("id",$request->input("id"))->first();
        $artefacto->delete();
        return response()->json(1);
    }
    public function getArtefacto(Request $request)
    {
        $artefacto=Artefacto::where("id",$request->input("id"))->first();
        //dd($artefacto);
        return response()->json($artefacto);
    }
}
