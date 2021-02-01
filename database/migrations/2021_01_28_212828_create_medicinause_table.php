<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinauseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicinause', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('animal_id')->index();
            $table->foreign('animal_id','fk_medicineap_animals')->references('id')->on('animals')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('medicina_id')->index();
            $table->foreign('medicina_id','fk_medicineap_medicina')->references('id')->on('medicina')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedTinyInteger('ml_ap');
            $table->date('fecha_ap');
            $table->date('fecha_prox');
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
        Schema::dropIfExists('medicinause');
    }
}
