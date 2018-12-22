<?php

namespace App;

use App\Proyecto;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modalidadpg extends Model
{
     Use SoftDeletes;

    protected $fillable=[
        'INICIAL',
        'DESCRIPCION'
    ];

    protected $dates=['delete_at'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}
