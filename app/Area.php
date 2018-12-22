<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\SubArea;
class Area extends Model
{
    Use SoftDeletes;

    protected $fillable=['COD_AREA',
    'NOMBRE_AREA',
    'DESC_AREA'];

    protected $dates=['delete_at'];

    public function subarea()
    {
        return $this->hasMany(Subarea::class);
    }
    public function proyecto()
    {
        return $this->belongsToMany(Proyecto::class, 'area_proyecto')->withTimestamps();
    }
    public function profesional()
    {
        return $this->belongsToMany(Profesional::class, 'area_profesional')->withTimestamps();
    }
    public function scopeBuscar($query, $cadena){
     return $query->where(DB::raw("CONCAT(COD_AREA, ' ', NOMBRE_AREA)"), "LIKE", "%$cadena%");
   }
}
