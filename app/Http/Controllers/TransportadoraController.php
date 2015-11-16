<?php

namespace flexy\Http\Controllers;

use Illuminate\Http\Request;

use flexy\Http\Requests;
use flexy\Http\Controllers\Controller;
use flexy\Http\Requests\TransportadoraRequest;
use flexy\Transportadora;
use DB;
use Input;

class TransportadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportadoras = \flexy\Transportadora::all();
        return view('transportadoras/list', ['transportadoras'=>$transportadoras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportadoras/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransportadoraRequest $request)
    {
        if($request instanceof TransportadoraRequest){
            $data = $request->all();
            //echo "<pre>";
            //print_r($data);die;
            Transportadora::create($data);
            return redirect('transportadoras');
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

    public function consulta(Request $request)
    {
        if($request instanceof Request){
            $data = $request->all();
            $busca = DB::select(
                'SELECT * FROM valor_fc_fp_tps
                INNER JOIN transportadoras ON transportadoras.id_transportadora = valor_fc_fp_tps.transportadora_id
                INNER JOIN faixa_pesos ON faixa_pesos.id_fp = valor_fc_fp_tps.faixa_peso_id
                INNER JOIN faixa_ceps on faixa_ceps.id_fc = valor_fc_fp_tps.faixa_cep_id
                WHERE '.$data['dados_form']['peso'].' BETWEEN faixa_pesos.`faixa_peso_ini` AND faixa_pesos.`faixa_peso_fim`
                AND '.$data['dados_form']['cep'].' BETWEEN `faixa_ceps`.`faixa_cep_ini` AND `faixa_ceps`.`faixa_cep_fim`'
            );
          return $busca;
        }
    }
}
