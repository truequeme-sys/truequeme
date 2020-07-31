<?php

namespace App\Http\Controllers;

use App\Artefacto;
use App\Empresa;
use App\Giro;
use App\Servicio;
use App\User;
use Illuminate\Database\Eloquent\Builder;
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

    public function create()
    {
        return 'ok';
    }
    public function getArtefacto(Request $request)
    {
        $artefacto=Artefacto::where("id",$request->input("id"))->first();
        dd($request->input("id"));
        return response()->json($artefacto);
    }
}
