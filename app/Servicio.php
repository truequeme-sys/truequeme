<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";
    protected $fillable = [
        "nombre",
        "caracteristicas",
        "costo",
        "lugar_entrega",
        "categoria",
        "tiene_garantia",
        "user_id",
    ];
}
