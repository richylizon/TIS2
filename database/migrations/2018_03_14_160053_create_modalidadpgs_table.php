<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadpgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('modalidadpgs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('INICIAL',30)->default('PG');
             $table->string('DESCRIPCION',30)->default('Proyecto de Grado');
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
        Schema::dropIfExists('modalidadpgs');
    }
}

