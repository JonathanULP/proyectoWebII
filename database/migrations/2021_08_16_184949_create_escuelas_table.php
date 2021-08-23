<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('cue');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('telefonointerno');
            $table->string('email')->unique();
            $table->float('cantidadAlumnosPromedio');
            $table->tinyInteger('bilingue');
            $table->string('director');
            $table->string('orientacion');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->unsignedBigInteger('ambito_id');
            $table->foreign('ambito_id')->references('id')->on('ambitos');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('tipo_jornada_id');
            $table->foreign('tipo_jornada_id')->references('id')->on('tipo_jornadas');
            $table->unsignedBigInteger('tipo_secundario_id')->nullable();
            $table->foreign('tipo_secundario_id')->references('id')->on('tipo_secundarios');
            $table->unsignedBigInteger('localidad_id');
            $table->foreign('localidad_id')->references('id')->on('localidads');
            $table->unique(['cue','nivel_id']);
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
        Schema::dropIfExists('escuelas');
    }
}
