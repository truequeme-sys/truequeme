<?php

namespace App\Http\Controllers;

use App\Artefacto;
use App\User;
use Illuminate\Http\Request;

class TruequeController extends Controller
{

    public function index()
    {
        $artefactos = Artefacto::get();
        $users = User::get();
        return view('trueques.index', compact('artefactos', 'users'));
    }

    public function create()
    {
        return 'ok';
    }
}
