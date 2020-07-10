<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artefacto extends Model
{
    // =============
    // RELATIONSHIPS
    // =============

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
