<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_estudiante', function (Blueprint $table) {
            $table->integer('curso_id')->unsigned();
            $table->integer('estudiante_id')->unsigned();

            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_estudiante');
    }
}
