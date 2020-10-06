@extends('layouts.app', ["current" => "cadastro"])
@section('body')
<form action="/orcamentos/{{$orcamento->id}}" method="post">
@csrf
<h4 class="text-center">Editar orçamento</h4>
<hr>
<div class="col-md-6 offset-md-3">
    <div class="form-group">
        <label for="inputAddress">Id</label>
        <input type="text" class="form-control" name="id" id="id" value="{{$orcamento->id}}" readonly>
      </div>

  <div class="form-group">
    <label for="cliente">Nome do cliente</label>
    <input type="text" class="form-control" name="nome_cliente" id="cliente" value="{{$orcamento->nome_cliente}}">
  </div>
  
  <div class="form-group"> 
    <label for="vendedor">Nome do vendedor</label>
    <input type="text" class="form-control" name="nome_vendedor" id="vendedor" value="{{$orcamento->nome_vendedor}}">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="data">Data</label>
      <input type="date" class="form-control" name="dt_orcamento" id="data" value="{{ Carbon\Carbon::parse($orcamento->dt_orcamento)->format('Y-m-d') }}" >
    </div>
    <div class="form-group col-md-6">
      <label for="hora">Hora</label>
      <input type="time" class="form-control" name="hr_orcamento" id="hora" value="{{$orcamento->hr_orcamento}}">
    </div>
  </div>

  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" name="descricao_orcamento" id="descricao" rows="1">{{$orcamento->descricao_orcamento}}</textarea>
  </div>


  <div class="form-group">  
    <label for="valor">Valor</label>
    <input type="number" step=any class="form-control" id="valor" name="valor_orcamento" id="valor" value="{{$orcamento->valor_orcamento}}">
  </div>

<div class="col text-center">
  <button type="submit" class="btn btn-primary">Editar</button>
  <a class="btn btn-danger" href="/orcamentos">Cancelar</a>
<div>
</div>
  
</form>
@endsection