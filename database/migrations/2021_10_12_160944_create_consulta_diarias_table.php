<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaDiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta_diarias', function (Blueprint $table) {
            $table->increments('id');
            $table->float('Temperatura', 8, 2);
            $table->float('PesoCorporal', 8, 2);
            $table->float('PulsoCardiaco', 8, 2);
            $table->date('FechaConsulta')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('Usuarios_id');
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta_diarias');
    }
}
