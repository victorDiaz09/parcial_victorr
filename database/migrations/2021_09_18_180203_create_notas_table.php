<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id_nota');
            $table->string('nota1');
            $table->string('nota2');
            $table->string('nota3');
            $table->string('nota4');
            $table->string('promedio');
            $table->string('parcial');
            $table->unsignedInteger('id_alumno');
            $table->unsignedInteger('id_cursos');
            $table->unsignedInteger('id_profesor');
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
        Schema::dropIfExists('notas');
    }
}
