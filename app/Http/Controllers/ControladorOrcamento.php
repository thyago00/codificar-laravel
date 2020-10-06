<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Orcamento;

class ControladorOrcamento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamento = Orcamento::all();
        return view('orcamentos', compact('orcamento'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orcamento = new Orcamento();
        $orcamento-> nome_cliente = $request->input('nome_cliente');
        $orcamento-> nome_vendedor = $request->input('nome_vendedor');
        $orcamento-> dt_orcamento = $request->input('dt_orcamento');
        $orcamento-> hr_orcamento = $request->input('hr_orcamento');
        $orcamento-> descricao_orcamento = $request->input('descricao_orcamento');
        $orcamento-> valor_orcamento = $request->input('valor_orcamento');
        $orcamento->save();

        toast('Cadastrado com sucesso!','success');
        return redirect('/orcamentos');
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
        $orcamento = Orcamento::find($id);
        if (isset($orcamento)) {
            return view('editar', compact('orcamento'));
        }
        return redirect('/orcamentos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $orcamento = Orcamento::find($request->id);
        if (isset($orcamento)) {
            $orcamento-> nome_cliente = ($request->nome_cliente);
            $orcamento-> nome_vendedor = ($request->nome_vendedor);
            $orcamento-> dt_orcamento = ($request->dt_orcamento);
            $orcamento-> hr_orcamento = ($request->hr_orcamento);
            $orcamento-> descricao_orcamento = ($request->descricao_orcamento);
            $orcamento-> valor_orcamento = ($request->valor_orcamento);
            $orcamento->save();            
        }
        toast('Editado com sucesso!','success');
        return redirect('/orcamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $orcamento = Orcamento::find($request->id);
        if (isset($orcamento)) {
            $orcamento->delete();
        }
        toast('Deletado com sucesso!','success');
        return redirect('/orcamentos');
    }
}
