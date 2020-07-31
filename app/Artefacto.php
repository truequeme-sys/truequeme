<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artefacto extends Model
{
    // =============
    // RELATIONSHIPS
    // =============
    protected $fillable = [
        "id",
        "titulo",
        "tipo",
        "necesita_u_ofrece",
        "imagen",
        "giro",
        "user_id",
        "empresa_id",
        "categoria_id",
        "validez",
        "comentario"
    ];
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
