<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    public function store(Request $request)
    {
        $empresa = new Empresa;
        $empresa->razon_social = $request->razon_social_empresa;
        $empresa->rfc = $request->rfc_empresa;
        $empresa->direccion = $request->direccion_empresa;
        $empresa->colonia = $request->colonia_empresa;
        $empresa->ciudad = $request->ciudad_empresa;
        $empresa->estado = $request->estado_empresa;
        $empresa->pais = $request->pais_empresa;
        $empresa->save();

        Auth::user()->empresas()->attach($empresa->id);

        return redirect()->back();
    }

    public function update(Request $request, Empresa $empresa)
    {
        $empresa->razon_social = $request->razon_social_empresa;
        $empresa->rfc = $request->rfc_empresa;
        $empresa->direccion = $request->direccion_empresa;
        $empresa->colonia = $request->colonia_empresa;
        $empresa->ciudad = $request->ciudad_empresa;
        $empresa->estado = $request->estado_empresa;
        $empresa->pais = $request->pais_empresa;
        $empresa->save();
        return redirect()->back();
    }

    public function destroy(Request $request, Empresa $empresa){
        Auth::user()->empresas()->detach($empresa->id);
        $empresa->delete();

        return redirect()->back();
    }
}
