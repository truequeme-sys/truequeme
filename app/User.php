<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rfc',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'celular',
        'whatsapp',
        'foto',
        'codigo_postal'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // =============
    // RELATIONSHIPS
    // =============

    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    public function especialidad(){
        return $this->hasOne('App\Especialidad');
    }
}
