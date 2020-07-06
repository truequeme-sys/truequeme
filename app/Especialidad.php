<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = "especialidades";
    protected $fillable = [
        "descripcion",
        "user_id"
    ];
}
