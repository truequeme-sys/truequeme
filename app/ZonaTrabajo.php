<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZonaTrabajo extends Model
{
    protected $table = "zonas_trabajo";
    protected $fillable = [
        "descripcion",
        "user_id"
    ];
}
