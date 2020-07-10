<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruequeController extends Controller
{

    public function index()
    {
        return view('trueques.index');
    }

    public function create()
    {
        return 'ok';
    }
}
