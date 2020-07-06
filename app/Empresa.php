<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresas";
    protected $fillable = [
        "nombre",
        "giro_id",
        "codigo_postal",
        "user_id"
    ];
}
