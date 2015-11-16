@extends('app')

@section('content')
<div class="container" style="width:80%; margin-left: 10%;">
<center><h3>Transportadoras</h3></center><br>
<div>
	<a href="{{url('/transportadoras-inserir')}}" type="button" class="btn btn-success form-control">CADASTRAR NOVA TRANSPORTADORA</a>
</div>
<div class="jumbotron">

	<table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Nome Fantasia</th>
	      <th>Razao Social</th>
	      <th>CNPJ</th>
	      <th>Acoes</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($transportadoras as $k => $transportadora)
			    <tr>
			      <td>{{ $k+1 }}</td>
			      <td>{{ $transportadora->nome_fantasia }}</td>
			      <td>{{ $transportadora->razao_social }}</td>
			      <td>{{ $transportadora->cnpj }}</td>
		  		@if($transportadora->status_transportadora == 1)
			      <td><a href="{{ url('transportadoras-editar'). $transportadora->id_transportadora }}">Editar</a> | <a href="{{ $transportadora->id_transportadora }}">Excluir</a> | <a href="{{ $transportadora->id_transportadora }}">Inativar</a></td>
		  		@elseif($transportadora->status_transportadora == 0)
			      <td><a href="{{ url('transportadoras-editar'). $transportadora->id_transportadora}}">Editar</a> | <a href="{{ $transportadora->id_transportadora }}">Excluir</a> | <a href="{{ $transportadora->id_transportadora }}">Ativar</a></td>
				@else
				@endif
			    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection

