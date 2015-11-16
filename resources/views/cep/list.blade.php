@extends('app')

@section('content')
<div class="container" style="width:80%; margin-left: 10%;">
<center><h3>Faixas de Cep</h3></center><br>
<div>
	<a href="{{url('/faixas-de-cep-inserir')}}" type="button" class="btn btn-success form-control">CADASTRAR NOVA FAIXA DE CEP</a>
</div>
<div class="jumbotron">

	<table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Faixa Inicial de Cep</th>
	      <th>Faixa Final de Cep</th>
	      <th>Localidade</th>
	      <th>Acoes</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($faixaCeps as $k => $faixaCep)
			    <tr>
			      <td>{{ $k+1 }}</td>
			      <td>{{ $faixaCep->faixa_cep_ini }}</td>
			      <td>{{ $faixaCep->faixa_cep_fim }}</td>
			      <td>{{ $faixaCep->localidade_faixa_cep }}</td>
			      <td><a href="{{ url('faixa-de-cep'). $faixaCep->id_fc }}">Editar</a> | <a href="{{ $faixaCep->id_fc }}">Excluir</a></td>
			    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection

