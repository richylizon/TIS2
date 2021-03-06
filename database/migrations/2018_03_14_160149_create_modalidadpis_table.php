<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('modalidadpis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('INICIAL',30)->default('PI');
            $table->string('DESCRIPCION',50)->default('Proyecto de Investigacion(tesis)');
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
        Schema::dropIfExists('modalidadpis');
    }
}
