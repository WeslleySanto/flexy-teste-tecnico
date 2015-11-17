<?php

namespace flexy;

use Illuminate\Database\Eloquent\Model;

class ValorFcFpTp extends Model
{
    protected $fillable = ['valor','transportadora_id','faixa_cep_id','faixa_peso_id'];

    public function faixaCep()
    {
    	return $this->hasOne('flexy\FaixaCep');
    }

    public function faixaPeso()
    {
    	return $this->hasOne('flexy\FaixaPeso');
    }

    public function faixaTransportadora()
    {
    	return $this->hasOne('flexy\Transportadora');
    }
}