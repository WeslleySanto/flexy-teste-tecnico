<?php

namespace flexy\Http\Controllers;

use Illuminate\Http\Request;

use flexy\Http\Requests;
use flexy\Http\Controllers\Controller;
use flexy\Http\Requests\FaixaCepRequest;
use flexy\FaixaCep;
use Input;
use DB;

class FaixaCepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faixaCeps = \flexy\FaixaCep::all();
        return view('cep/list', ['faixaCeps'=>$faixaCeps]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cep/create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaixaCepRequest $request)
    {
        $data = $request->all();
        //echo "<pre>";
        //print_r($data);die;
        FaixaCep::create($data);
        return redirect('faixas-de-cep');    }

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
