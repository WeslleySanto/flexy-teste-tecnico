@extends('app')

@section('content')
<div class="container" style="width:80%; margin-left: 10%;">
<center><h3>Faixas de Peso para Entregas</h3></center><br>
<div>
	<a href="{{url('/faixas-de-cep-inserir')}}" type="button" class="btn btn-success form-control">CADASTRAR NOVA FAIXA DE PESO</a>
</div>
<div class="jumbotron">

	<table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Faixa Inicial de Peso</th>
	      <th>Faixa Final de Peso</th>
	      <th>Acoes</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($faixaPesos as $k => $faixaPeso)
			    <tr>
			      <td>{{ $k+1 }}</td>
			      <td>De {{ $faixaPeso->faixa_peso_ini }} Kg</td>
			      <td>à {{ $faixaPeso->faixa_peso_fim }} Kg</td>
			      <td><a class="btn-sm btn-success" href="{{ url('faixa-de-cep'). $faixaPeso->id_fp }}">Editar</a> | <a class="btn-sm btn-danger" href="{{ $faixaPeso->id_fp }}">Excluir</a></td>
			    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection

