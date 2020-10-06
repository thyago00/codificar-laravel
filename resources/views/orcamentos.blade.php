@extends('layouts.app', ["current" => "orcamentos"])
<title>Lista de orçamentos</title>

<!-- css datatable -->
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>  


<style>
@media (max-width: 640px) {
  #btn-cadastro{
   text-align: center;
}
}

@media (max-width: 990px){
    #card{
    border:none
}
}
    </style>

@section('body')
<div id="btn-cadastro">
<a class="btn btn-info mb-2" href="/cadastro">Cadastrar</a>        
</div>
    <!-- inicio tabela -->
    <div id="card" class="card mb-4">
        <div class="card-body">
        <h4 class="card-title text-center">Lista de orçamentos</h4>
        <div class="container-fluid">
        <table id="tabelaOrcamentos" class="table table-responsive-md table-bordered table-hover nowrap">
            <thead class="thead-light">
                <tr>
                    <th class="text-center" width="16%">Cliente</th>
                    <th class="text-center" width="16%">Vendedor</th>
                    <th class="text-center" width="12%">Data</th>
                    <th class="text-center" width="10%">Hora</th>
                    <th class="text-center" width="16%">Descrição</th>
                    <th class="text-center" width="15%">Valor</th>
                    <th class="text-center" width="15%">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orcamento as $dados)

                <tr>
                        <td class="text-center">{{$dados->nome_cliente}}</td>
                        <td class="text-center">{{$dados->nome_vendedor}}</td>
                        <td data-order="{{$dados->dt_orcamento}}" class="text-center">{{ Carbon\Carbon::parse($dados->dt_orcamento)->format('d/m/Y') }}</td>
                        <td class="text-center">{{date('H:i', strtotime($dados->hr_orcamento)) }}</td>
                        <td class="text-center">{{$dados->descricao_orcamento}}</td>
                        <td class="text-right">R$ {{$dados->valor_orcamento}}</td>
                        <td>
                        <a class="btn btn-sm btn-primary" href="orcamentos/editar/{{$dados->id}}"><i class="fa fa-edit"></i>&nbsp;Editar</a>
                        <a class="deletar btn btn-sm btn-danger" href="orcamentos/deletar/{{$dados->id}}"><i class="fa fa-trash"></i>&nbsp; Deletar</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
    <!-- fim tabela --> 

    <!-- Sweet Alert -->
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  src="{{ asset('js/btn_delete.js') }}"></script>
     
    
    <!-- DataTable -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
  <script src="{{ asset('js/datatable.js') }}"></script>
  
@include('sweetalert::alert')
@endsection
