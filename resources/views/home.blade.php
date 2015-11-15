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
                    <input type="text" class="form-control" name="cep"  placeholder="Insira o cep para entrega ex: 88888-889">
                </div>
            </div>

            <div class="form-group has-success col-lg-12">
                <label class="control-label" for="peso">Insira o Peso do Produto em Kg:</label>
                <div class="input-group">
                    <span class="input-group-addon">Kg</span>
                    <input type="text" name="peso" class="form-control" placeholder="Insira o peso do produto à ser entregue ex: 5">
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <button type="button" id="consultar" class="btn btn-primary form-control">CONSULTAR</button>
                </div>
            </div><br>
        </fieldset>
    {!! Form::close() !!}
    <br>
    <div id="alertaError" class="alert alert-dismissible alert-danger" style="display: none;">
    <div id="msgError"></div>
    </div>
    <div id="alertaSemResultado" class="alert alert-dismissible alert-warning" style="display: none;">
        <div id="msgSemResultado"></div>
    </div>
</div>
<div id="resultados" class="container" style="display: none;">
    <div class="panel panel-default">
      <div class="panel-heading">Resultados da Busca</div>
      <div class="panel-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                  <th>CNPJ</th>
                  <th>Nome da Transportadora</th>
                  <th>Valor do Frete</th>
                  <th>Localidade do Cep</th>
                  <th>Faixa de peso</th>
                </tr>
            </thead>
            <tbody id="listagem">
            </tbody>
    </table>
      </div>
    </div>
</div>
<script type="text/javascript">

    $('#consultar').click(function(){

        var dados_form = {cep:$('input[name=cep]').val(),peso:$('input[name=peso]').val(),'_token': $('input[name=_token]').val()};
        //alert(dados_form.cep +" "+ dados_form.peso+ " "+dados_form._token);
        var saida='';
        $.ajax({
            type: 'POST',
            url:  'consulta',
            data: {'dados_form' : dados_form},
            success: function(data,saida){
                //console.log(data[0].cnpj);
                if(data == false){
                    $('#alertaSemResultado').show();
                    var mensagem = '<h4>Desculpe encontramos nenhum resultado para sua pesquisa<h4>';
                    $("#msgSemResultado").html(mensagem);
                }else{
                    var arrayElementos = data;
                    jQuery.each(arrayElementos , function(index, value){
                        saida += "<tr>";
                        saida += '<td>'+value.cnpj+'</td>';
                        saida += '<td> R$ '+value.nome_fantasia+'</td>';
                        saida += '<td>'+value.valor+'</td>';
                        saida += '<td>'+value.localidade_faixa_cep+'</td>';
                        saida += '<td>De '+value.faixa_peso_ini+' Kg à '+value.faixa_peso_fim+' Kg</td>';
                        saida += "</tr>";
                        console.log(saida);
                    });
                    $("#listagem").html(saida);
                    $("#resultados").show();
                }
            },
            error: function(){
                $('#alertaError').show();
                var mensagem = '<h4>Desculpe houve um erro inesperado ao tentar realizar sua pesquisa</h4>';
                $("#msgError").html(mensagem);
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