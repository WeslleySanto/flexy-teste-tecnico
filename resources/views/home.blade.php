@extends('app')
@section('content')
<div class="container">
    {!! Form::open() !!}
        <fieldset>
            <legend>Consulte a melhor opção de entrega</legend>
            <div class="form-group has-success col-lg-12">
                <label class="control-label" for="cep">Insira o Cep para Entrega:</label>
                <div class="input-group">
                    <span class="input-group-addon">Cep</span>
                    <input class="form-control" name="cep" type="number" placeholder="Insira o cep para entrega ex: 88888-889">
                </div>
            </div>

            <div class="form-group has-success col-lg-12">
                <label class="control-label" for="peso">Insira o Peso do Produto em Kg:</label>
                <div class="input-group">
                    <span class="input-group-addon">Kg</span>
                    <input type="text" name="peso" class="form-control" type="number" placeholder="Insira o peso do produto à ser entregue ex: 5">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <button type="button" id="consultar" class="btn btn-primary form-control">CONSULTAR</button>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
</div>
<script type="text/javascript">
    $('#consultar').click(function(){

        // var cep    = $('#cep').val();
        // var peso    = $('#peso').val();

        var dados_form = {cep:$('input[name=cep]').val(),peso:$('input[name=peso]').val(),'_token': $('input[name=_token]').val()};
        //alert(dados_form.cep +" "+ dados_form.peso+ " "+dados_form._token);
        $.ajax({
            type: 'POST',
            url:  'consulta',
            data: {'dados_form' : dados_form},
            success: function(data){
                alert('foi ebaaa '+data);
            },
            error: function(){
                alert('Ops não foi');
            }
            // success: function(response){
            //     alert(response);
            //     var mensagem = 'O primeiro caractere de ocorrência única é '+response;
            //     $('#alertaSuccess').show();
            //     $("#msgBackEnd").text(mensagem);
            //     $('#texto').val('');
            // },
            // error: function(){
            //     $('#alertaError').show();
            //     var mensagem = 'Erro ao analisar a string';
            //     $("#msgError").text(mensagem);
            //}
        });

    });
</script>
@endsection('content')