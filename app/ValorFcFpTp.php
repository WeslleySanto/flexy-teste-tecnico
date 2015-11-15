<?php

namespace flexy;

use Illuminate\Database\Eloquent\Model;

class ValorFcFpTp extends Model
{
    protected $fillable = ['valor','faixa_cep_id','transportadora_id','faixa_peso_id'];
}
