<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
		    $table->text('TITULO_PERFIL')->nullable()->default(null);
		    $table->date('FECHA_REGISTRO')->nullable()->default(null);
		    $table->text('GESTION_REGISTRO')->nullable()->default(null);
		    $table->text('GESTION_LIMITE')->nullable()->default(null);
		    $table->text('OBJ_GRAL')->nullable();
		    $table->text('OBJ_ESP')->nullable();
		    $table->text('DESCRIPCION')->nullable();
		    $table->date('FECHA_INI')->nullable()->default(null);
		    $table->date('FECHA_DEF')->nullable()->default(null);
		    $table->text('GESTION_PRORROGA')->nullable()->default(null);
            $table->enum('CICLO', ['en progreso', 'defendido','expirado']);
            $table->integer('estudiante_id')->unsigned();
            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->integer('modalidad_id')->unsigned();
            $table->foreign('modalidad_id')->references('id')->on('modalidades')->onDelete('cascade');

  /*          $table->integer('modalidadtd_id')->unsigned();
            $table->foreign('modalidadtd_id')->references('id')->on('modalidadtds')->onDelete('cascade');
         
            $table->integer('modalidadpg_id')->unsigned();
            $table->foreign('modalidadpg_id')->references('id')->on('modalidadpgs')->onDelete('cascade');
           
            $table->integer('modalidadad_id')->unsigned();
            $table->foreign('modalidadad_id')->references('id')->on('modalidadads')->onDelete('cascade');
        
            $table->integer('modalidadpi_id')->unsigned();
            $table->foreign('modalidadpi_id')->references('id')->on('modalidadpis')->onDelete('cascade');
            
            
            $table->integer('modalidadex_id')->unsigned();
            $table->foreign('modalidadex_id')->references('id')->on('modalidadexes')->onDelete('cascade');*/

            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
