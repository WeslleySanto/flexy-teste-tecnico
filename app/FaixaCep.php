<?php

namespace flexy;

use Illuminate\Database\Eloquent\Model;

class FaixaCep extends Model
{
    protected $fillable = ['faixa_cep_ini','faixa_cep_fim','localidade_faixa_cep'];
}
