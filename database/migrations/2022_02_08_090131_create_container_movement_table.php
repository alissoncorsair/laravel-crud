<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainerMovementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container_movement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('container_id')->constrained('containers'); /* por padrao ele ja procura um campo "id" */
            $table->string('tipo');
            $table->dateTime('entrada');
            $table->dateTime('saida');
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
        Schema::dropIfExists('container_movement');
    }
}
