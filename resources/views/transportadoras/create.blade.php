@extends('app')

@section('content')
<h1>Transportadoras</h1>


<div class="jumbotron">
	{!! Form::open(array('url'=>'transportadora/store','method'=>'POST', 'id'=>'formTransportadoras')) !!}
		<div class="form-group">
	      	<label for="nomeFantasia" class="col-lg-2 control-label">Nome Fantasia</label>
	      	<div class="col-lg-10">
	        	<input type="text" class="form-control" id="nomeFantasia" placeholder="Ex: TNT Trasportes LTDA">
	      	</div>
	    </div>
		<label>Nome Fantasia</label>
		<input id="" name="" class="" />
		<label>Razão Social</label>
		<input id="" name="" class="" />
		<label>CNPJ</label>
		<input id="" name="" class="" />
	{!! Form::close() !!}
</div>
@endsection