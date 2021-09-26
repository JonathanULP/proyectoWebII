<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailuresOrdenMeritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failures_orden_meritos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('region')->nullable();
            $table->string('nivel')->nullable();
            $table->string('apellido')->nullable();
            $table->string('nombre')->nullable();
            $table->string('cuil')->nullable();
            $table->string('sexo')->nullable();
            $table->string('localidad')->nullable();
            $table->string('cargo')->nullable();
            $table->string('titulo1')->nullable();
            $table->string('titulo2')->nullable();
            $table->string('incumbencia')->nullable();
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
        Schema::dropIfExists('failures_orden_meritos');
    }
}
