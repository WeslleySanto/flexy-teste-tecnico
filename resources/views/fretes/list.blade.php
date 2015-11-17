@extends('app')

@section('content')
<div class="container" style="width:80%; margin-left: 10%;">
<center><h3>Lista de opções de frete</h3></center><br>
<div>
	<a href="{{url('/opcoes-de-frete-inserir')}}" type="button" class="btn btn-success form-control">CADASTRAR NOVA OFERTA DE ENTREGA</a>
</div>
<div class="jumbotron">

	<table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Valor</th>
	      <th>Faixa de Cep</th>
	      <th>Faixa de Peso</th>
	      <th>Localidade</th>
	      <th>Transportadora</th>
	      <th>Ações</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php //echo '<pre>';print_r($opcoesFretes);die; ?>
	  	@foreach($opcoesFretes as $k => $frete)
			    <tr>
			      <td>{{ $k+1 }}</td>
			      <td>R$ {{ $frete->valor }}</td>
			      <td>Dê {{ $frete->faixa_cep_ini}} à {{$frete->faixa_cep_fim}}</td>
			      <td>Dê {{ $frete->faixa_cep_ini}} à {{$frete->faixa_cep_fim}} Kg</td>
			      <td>{{ $frete->localidade_faixa_cep }}</td>
			      <td>{{ $frete->nome_fantasia }}</td>
			      <td><a class="btn-sm btn-success" href="{{ url('faixa-de-cep'). $frete->id }}">Editar</a> | <a class="btn-sm btn-danger" href="{{ $frete->id }}">Excluir</a></td>
			    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection

