<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaixaPesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixa_pesos', function (Blueprint $table) {
            $table->increments('id_fp');
            $table->unsignedInteger('faixa_peso_ini');
            $table->unsignedInteger('faixa_peso_fim');
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
        Schema::drop('faixa_pesos');
    }
}
