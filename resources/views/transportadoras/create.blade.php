@extends('app')

@section('content')
<div class="container" style="">
<center><h1>Transportadoras</h1></center>
<div class="jumbotron">
	{!! Form::open(array('url'=>'transportadora/store','method'=>'POST', 'id'=>'formTransportadoras')) !!}
		<div class="form-group">
	      	<label for="nomeFantasia" class="col-lg-2 control-label">Nome Fantasia</label>
	      	<div class="col-lg-10">
	        	<input type="text" class="form-control" id="nomeFantasia" placeholder="Ex: TNT Trasportes LTDA">
	      	</div>
	    </div>
	    <div class="form-group">
	      	<label for="razaoSocial" class="col-lg-2 control-label">Razão Social</label>
	      	<div class="col-lg-10">
	        	<input type="text" class="form-control" id="razaoSocial" placeholder="Ex: TNT Trasportes LTDA">
	      	</div>
	    </div>
		<div class="form-group">
	      	<label for="cnpj" class="col-lg-2 control-label">CNPJ</label>
	      	<div class="col-lg-10">
	        	<input type="text" class="form-control" id="cnpj" placeholder="Ex: 01.394.340/0001-78">
	      	</div>
	    </div>
	{!! Form::close() !!}
</div>
</div>
@endsection