@extends('layouts.app', ["current" => "cadastro"])
@section('body')
<form action="/cadastro" method="post">
@csrf
<h4 class="text-center">Cadastrar orçamento</h4>
<hr>
<div class="col-md-6 offset-md-3">

  <div class="form-group">
    <label for="cliente">Nome do cliente</label>
    <input type="text" class="form-control" name="nome_cliente" id="cliente" required>
  </div>
  
  <div class="form-group"> 
    <label for="vendedor">Nome do vendedor</label>
    <input type="text" class="form-control" name="nome_vendedor" id="vendedor" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="data">Data</label>
      <input type="date" class="form-control" name="dt_orcamento" id="data" required>
    </div>
    <div class="form-group col-md-6">
      <label for="hora">Hora</label>
      <input type="time" class="form-control" name="hr_orcamento" id="hora" required>
    </div>
  </div>

  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" name="descricao_orcamento" id="descricao" required rows="1"></textarea>
  </div>


  <div class="form-group"> 
    <label for="valor">Valor</label>
    <input type="number" step=any class="form-control" name="valor_orcamento" id="valor" required>

</div>
    
<div class="col text-center">
  <button type="submit" class="btn btn-success">Cadastrar</button>
  <a class="btn btn-danger" href="/orcamentos">Cancelar</a>
  </div>
  
</form>
@endsection