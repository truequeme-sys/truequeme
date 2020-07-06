<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $table = "certificados";

    protected $fillable = [
        'nombre',
        'institucion',
        'fecha_expedicion',
        'fecha_expiracion',
        'pais',
        'user_id',
    ];
}
