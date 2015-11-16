@extends('app')

@section('content')
<div class="jumbotron container" style="width:80%; margin-left: 10%;">
	<center><h3>Faixas de Peso</h3></center>
	<div style="position: relative; height:auto;">
		{!! Form::open(['url'=>'peso/store','method'=>'post']) !!}
			<div class="form-group">
		        {!! Form::label('faixa_peso_ini', 'Inicio da faixa de peso:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('faixa_peso_ini', null, ['class' => 'form-control','placeholder'=>'Ex: 10.001']) !!}
		      	</div>
		    </div>
		    <div class="form-group">
		      	{!! Form::label('faixa_peso_fim', 'Final da faixa de peso:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('faixa_peso_fim', null, ['class' => 'form-control','placeholder'=>'Ex: 17.500']) !!}
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
