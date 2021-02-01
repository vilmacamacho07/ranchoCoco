<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('peso', 8, 2);
            $table->enum('sexo', ['hembra', 'macho']);
            $table->date('fecha_ingreso');
            $table->unsignedTinyInteger('edad');
            $table->enum('tipo', ['torete', 'novillona','vacas']);
            $table->string('raza');
            $table->enum('categoria', ['crianza', 'engorda']);
            $table->enum('gestacion', ['embarazo', 'soltera']);
            $table->timestamps();
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
