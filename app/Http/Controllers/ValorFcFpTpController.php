<?php

namespace flexy\Http\Controllers;

use Illuminate\Http\Request;

use flexy\Http\Requests;
use flexy\Http\Controllers\Controller;
use flexy\Http\Requests\ValorFcFpTpRequest;
use flexy\ValorFcFpTp;
use DB;

class ValorFcFpTpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opcoesFretes = DB::select(
            'SELECT * FROM valor_fc_fp_tps
            INNER JOIN transportadoras ON transportadoras.id_transportadora = valor_fc_fp_tps.transportadora_id
            INNER JOIN faixa_pesos ON faixa_pesos.id_fp = valor_fc_fp_tps.faixa_peso_id
            INNER JOIN faixa_ceps on faixa_ceps.id_fc = valor_fc_fp_tps.faixa_cep_id'
        );
        return view('fretes/list', ['opcoesFretes'=>$opcoesFretes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportadoras = DB::select(
            'SELECT * FROM transportadoras where status_transportadora =1'
        );

        $faixasCep = DB::select(
            'SELECT id_fc,faixa_cep_ini,faixa_cep_fim,localidade_faixa_cep FROM faixa_ceps'
        );

        $faixasPeso = DB::select(
            'SELECT id_fp,faixa_peso_ini,faixa_peso_fim FROM faixa_pesos'
        );

        $opcoesFretes[] = ['transportadoras'=>$transportadoras,'faixasCep'=>$faixasCep,'faixasPeso'=>$faixasPeso];

        return view('fretes/create',['opcoesFretes'=>$opcoesFretes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValorFcFpTpRequest $request)
    {
        if($request instanceof ValorFcFpTpRequest){

            $data = $request->all();
            print_r($data);
            ValorFcFpTp::create($data);
            return redirect('opcoes-de-frete');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
