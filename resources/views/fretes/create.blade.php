@extends('app')
@section('content')
<div class="jumbotron container" style="width:80%; margin-left: 10%;">
	<center><h3>Cadastrar Oferta de Frete</h3></center>
	<?php //echo '<pre>';print_r($opcoesFretes[0]);die; ?>
	<div style="position: relative; height:auto;">
		{!! Form::open(['url'=>'frete/store','method'=>'post']) !!}
			<div class="form-group">
	      		{!! Form::label('transportadora_id', 'Trasportadora: ',['class' =>'col-lg-2 control-label']) !!}
	      		<div class="form-group">
	      			<div class="col-lg-10">
	      				<select class="form-control" id="transportadora_id">
	      					<option>Selecione aqui uma transportadora</option>
	      					@foreach($opcoesFretes[0]['transportadoras'] as $k => $transportadora)
		      					<option value="{{$transportadora->id_transportadora}}">{{ $transportadora->nome_fantasia }}</option>
	      					@endforeach
	      				</select>
	      			</div>
	      		</div>
		    </div>
		    <div class="form-group">
	      		{!! Form::label('faixa_cep_id', 'Faixa de Cep: ',['class' =>'col-lg-2 control-label']) !!}
	      		<div class="form-group">
	      			<div class="col-lg-10">
	      				<select class="form-control" id="faixa_cep_id">
	      					<option>Selecione aqui uma faixa de cep</option>
	      					@foreach($opcoesFretes[0]['faixasCep'] as $k => $cep)
		      					<option value="{{$cep->id_fc}}">Dê {{ $cep->faixa_cep_ini }} à {{ $cep->faixa_cep_fim }}</option>
	      					@endforeach
	      				</select>
	      			</div>
	      		</div>
		    </div>
		    <div class="form-group">
	      		{!! Form::label('faixa_peso_id', 'Faixa de Peso: ',['class' =>'col-lg-2 control-label']) !!}
	      		<div class="form-group">
	      			<div class="col-lg-10">
	      				<select class="form-control" id="faixa_peso_id">
	      					<option>Selecione aqui uma faixa de peso</option>
	      					@foreach($opcoesFretes[0]['faixasPeso'] as $k => $peso)
		      					<option value="{{$peso->id_fp}}">Dê {{ $peso->faixa_peso_ini }} à {{ $peso->faixa_peso_fim }}</option>
	      					@endforeach
	      				</select>
	      			</div>
	      		</div>
		    </div>
		    <div class="form-group">
		      	{!! Form::label('valor', 'Preço em R$:',['class' =>'col-lg-2 control-label']) !!}
		      	<div class="col-lg-10">
		        	{!! Form::text('valor', null, ['class' => 'form-control','placeholder'=>'Ex: 10.00']) !!}
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
