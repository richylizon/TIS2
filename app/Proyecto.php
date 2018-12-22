<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


class Proyecto extends Model
{
    Use SoftDeletes;

    protected $fillable=[
            'TITULO_PERFIL',
            'FECHA_REGISTRO',
            'GESTION_REGISTRO',
            'GESTION_LIMITE',
            'OBJ_GRAL',
            'OBJ_ESP',
            'carrera_id',
            'estudiante_id',
            'area_id',
            'DESCRIPCION',
            'FECHA_INI',
            'FECHA_DEF',
            'GESTION_PRORROGA',
            'modalidad_id',
  /*          'modalidadtd_id',
            'modalidadpg_id',
            'modalidadad_id',
            'modalidadpi_id',
            'modalidadex_id',*/
            'CICLO'
    ];

    protected $dates=['delete_at'];

     public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    public function modalidad()
    {
        return $this->belongsTo(Modalidades::class);
    }

  /*  public function modalidadtd()
    {
        return $this->belongsTo(Modalidadtd::class);
    }
    public function modalidadpg()
    {
        return $this->belongsTo(modalidadpg::class);
    }

    public function modalidadad()
    {
        return $this->belongsTo(modalidadad::class);
    }

    public function modalidadpi()
    {
        return $this->belongsTo(modalidadpi::class);
    }

    public function modalidadex()
    {
        return $this->belongsTo(Modalidadex::class);
    }*/


    public function profesional()
    {
        return $this->belongsToMany(Profesional::class,'motivo_profesional_proyecto')->withPivot('profesional_id','proyecto_id', 'motivo_id')->withTimestamps();
    }
    public function motivo()
    {
        return $this->belongsToMany(Motivo::class,'motivo_profesional_proyecto')->withPivot('profesional_id','proyecto_id', 'motivo_id')->withTimestamps();
    }

    public function estudiante(){
        return $this->belongsToMany(Estudiante::class)->withTimestamps();
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function subarea()
    {
        return $this->belongsToMany(Subarea::class)->withTimestamps();
    }
   
    public function scopeNombre($query, $nombre){
      //return $query->where(DB::raw("CONCAT(NOM_PROF, ' ', AP_PAT_PROF, ' ', AP_MAT_PROF, ' ',CI_PROF, ' ' )"), "LIKE", "%$cadena%");
            // $noticia = Noticia::with(['notas'=>function($query)use($data){
            //   $query->where('nombre_nota',"Una nota")->where('duracion_nota',$data);
            // }])->get();
      $q = DB::table('proyectos')
         ->join('estudiante_proyecto', 'estudiante_proyecto.proyecto_id', '=', 'proyectos.id')
         ->join('estudiantes', 'estudiante_proyecto.estudiante_id', '=', 'estudiantes.id')
         // ->join('motivo_profesional_proyecto', 'proyectos.id', '=', 'motivo_profesional_proyecto.proyecto_id')
         // // ->join('profesional', 'profesional.id', '=', 'motivo_profesional_proyecto.profesional_id')
         // // ->join('proyectos', 'proyectos.id', '=', 'motivo_profesional_proyecto.proyecto_id')
         //->join('estudiante_profesionals as tutor', 'estudiantes.id', '=', 'tutor.estudiante_id')
         ->select("*")
         ->where("TITULO_PERFIL", "LIKE", "%$nombre%")
         ->orWhere("proyectos.id", "LIKE", "%$nombre%")
         ->orwhere("NOM_EST", "LIKE", "%$nombre%")
         ->orWhere("AP_PAT_EST", "LIKE", "%$nombre%")
         ->orWhere("AP_MAT_EST", "LIKE", "%$nombre%")
         ->orWhere("NOM_PROF", "LIKE", "%$nombre%")
         ->orWhere("AP_PAT_PROF", "LIKE", "%$nombre%")
         ->orWhere("AP_MAT_PROF", "LIKE", "%$nombre%")
         ->get();
         //dd($q);




      return $query=$q;

      // return $query->where("TITULO_PERFIL", "LIKE", "%$nombre%")
      //               ->orWhere("id", "LIKE", "%$nombre%");


    }

    public function scopeTutor($query,$nombre){
      return $query->where("NOM_PROF", "LIKE", "%$nombre%")
                    ->orWhere("AP_PAT_PROF", "LIKE", "%$nombre%")
                    ->orWhere("AP_MAT_PROF", "LIKE", "%$nombre%");
    }

     public function scopeCarrera($query,$carrera){
      return $query->where("carrera_id", "LIKE", "%$carrera%")
                    ->orWhere("NOM_CARRERA", "LIKE", "%$carrera%");
    }

      public function scopeArea($query,$carrera){
      return $query->where("area_id", "LIKE", "%$area%")
                    ->orWhere("NOMBRE_AREA", "LIKE", "%$area%");
    }   

    /*public function scopeCodigo($query,$codigo){
     $p = DB::table('proyectos')
         ->join('modalidad_td', 'modalidad_td.modalidad_id', '=', 'proyectos.id')
         ->join('modalidad_td', 'modalidad_td.proyecto_id', '=', 'tipo_modalidad')
         ->select("*")
                    ->orwhere()
                    ->orWhere("INICIAL", "LIKE", "%$codigo%")
        return $query=$p;
    }*/
    public function scopeBuscar($query, $cadena){
     return $query->where(DB::raw("CONCAT(TITULO_PERFIL)"), "LIKE", "%$cadena%");
   }


}
