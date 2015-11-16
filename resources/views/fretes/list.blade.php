@extends('app')

@section('content')
<div class="container" style="width:80%; margin-left: 10%;">
<center><h3>Opções e Ofertas para Entregas</h3></center><br>
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
	      <th>Transportadora</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($opcoesFretes as $k => $frete)
			    <tr>
			      <td>{{ $k+1 }}</td>
			      <td>R$ {{ $frete->valor }}</td>
			      <td>{{ $frete->faixa_cep_id }}</td>
			      <td>{{ $frete->faixa_peso_id }} Kg</td>
			      <td>{{ $frete->transportadora_id }}</td>
			      <td><a href="{{ url('faixa-de-cep'). $frete->id }}">Editar</a> | <a href="{{ $frete->id }}">Excluir</a></td>
			    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection

