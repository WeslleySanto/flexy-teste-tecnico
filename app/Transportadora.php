<?php

namespace flexy;

use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    protected $fillable = ['nome_fantasia','razao_social','cnpj'];

    public function faixasPeso()
    {
    	return $this->hasMany('flexy\FaixaPeso');
    }
}
