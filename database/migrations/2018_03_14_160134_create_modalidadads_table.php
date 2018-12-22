<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
         Schema::create('modalidadads', function (Blueprint $table) {
            $table->increments('id');
             $table->string('INICIAL',30)->default('AD');
              $table->string('DESCRIPCION',30)->default('Adcripcion');
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
        Schema::dropIfExists('modalidadads');
    }

}
