<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaixaCepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixa_ceps', function (Blueprint $table) {
            $table->increments('id_fc');
            $table->integer('faixa_cep_ini');
            $table->integer('faixa_cep_fim');
            $table->string('localidade_faixa_cep');
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
        Schema::drop('faixa_ceps');
    }
}
