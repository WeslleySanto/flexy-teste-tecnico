@extends('app')

@section('content')
<div class="container">
<center><h3>Transportadoras</h3></center>
<div class="jumbotron" style="width:80%; margin-left: 10%;">

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
	      <td><a href="{{ url('transportadoras/editar/') . $transportadora->id_transportadora }}">Editar</a> | <a href="{{ $transportadora->id_transportadora }}">Excluir</a></td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@endsection
</div>

