<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->int('profesor');
            $table->int('alumno');
            $table->int('asignatura');
            $table->int('curso');
            $table->foreign('profesor')->references('id')->on('profesores');
            $table->foreign('alumno')->references('id')->on('alumnos');
            $table->foreign('asignatura')->references('id')->on('asignaturas');
            $table->foreign('curso')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
};
