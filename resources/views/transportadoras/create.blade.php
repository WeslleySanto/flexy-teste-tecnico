@extends('app')

@section('content')
<div class="jumbotron container" style="width:80%; margin-left: 10%;">
	<center><h3>Transportadoras</h3></center>
	<div style="position: relative; height:auto;">
		{!! Form::open(['url'=>'transportadoras/store','method'=>'post']) !!}
			<div class="form-group">
		        {!! Form::label('nome_fantasia', 'Nome Fantasia:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('nome_fantasia', null, ['class' => 'form-control','placeholder'=>'Ex: TNT Trasportes']) !!}
		      	</div>
		    </div>
		    <div class="form-group">
		      	{!! Form::label('razao_social', 'Razão Social:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('razao_social', null, ['class' => 'form-control','placeholder'=>'Ex: TNT Trasportadora de Cargas LTDA']) !!}
		      	</div>
		    </div>
			<div class="form-group">
		      	{!! Form::label('cnpj', 'CNPJ:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('cnpj', null, ['class' => 'form-control','placeholder'=>'Ex: 01.139.453/0001-40']) !!}
		      	</div>
		    </div>
		    <div class="form-group">
		      	<div class="col-lg-12">
		        	{!! Form::submit('Cadastrar',['class'=>'col-lg-10 btn btn-success form-control']) !!}
		      	</div>
		    </div>
		{!! Form::close() !!}
	</div>
</div>
@if($errors->any())
<ul class="alert alert-warning">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>
@endif
@endsection
