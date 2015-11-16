@extends('app')

@section('content')
<div class="jumbotron container" style="width:80%; margin-left: 10%;">
	<center><h3>Faixas de Cep</h3></center>
	<div style="position: relative; height:auto;">
		{!! Form::open(['url'=>'cep/store','method'=>'post']) !!}
			<div class="form-group">
		        {!! Form::label('faixa_cep_ini', 'Inicio da faixa de cep:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('faixa_cep_ini', null, ['class' => 'form-control','placeholder'=>'Ex: 88000001']) !!}
		      	</div>
		    </div>
		    <div class="form-group">
		      	{!! Form::label('faixa_cep_fim', 'Final da faixa de cep:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('faixa_cep_fim', null, ['class' => 'form-control','placeholder'=>'Ex: 88099999']) !!}
		      	</div>
		    </div>
			<div class="form-group">
		      	{!! Form::label('localidade_faixa_cep', 'Localidade:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('localidade_faixa_cep', null, ['class' => 'form-control','placeholder'=>'Ex: Florianópolis']) !!}
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
