<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscriptorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptors', function (Blueprint $table) {
           $table->increments('id');
            $table->string('cedula');
            $table->string('contrasena2');
            $table->integer('nombres');
            $table->integer('paquete');
            $table->string('minutos');
            $table->string('internet');
            $table->string('cable');
            $table->decimal('total',5,2);
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
        Schema::dropIfExists('suscriptors');
    }
}
