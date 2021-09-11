<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_escuelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('division');
            $table->integer('curso');
            $table->string('materia',200);
            $table->float('horasMensuales')->nullable();
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->unsignedBigInteger('escuela_id');
            $table->foreign('escuela_id')->references('id')->on('escuelas');
            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->unsignedBigInteger('situacion_revista_id');
            $table->foreign('situacion_revista_id')->references('id')->on('situacion_revistas');
            $table->unique(['escuela_id','docente_id','materia','division','curso'],'uq_compuesta');
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
        Schema::dropIfExists('docente_escuelas');
    }
}
