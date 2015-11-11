<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValorFcFpTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valor_fc_fp_tps', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor', 5, 2);
            $table->integer('faixa_cep_id')->unsigned();
            $table->foreign('faixa_cep_id')->references('id_fc')->on('faixa_ceps')->onDelete('cascade');
            $table->integer('transportadora_id')->unsigned();
            $table->foreign('transportadora_id')->references('id_transportadora')->on('transportadoras')->onDelete('cascade');
            $table->integer('faixa_peso_id')->unsigned();
            $table->foreign('faixa_peso_id')->references('id_fp')->on('faixa_pesos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('valor_fc_fp_tps');
    }
}
