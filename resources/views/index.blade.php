@extends('layouts.app', ["current" => "index"])
<meta content="width=device-width, initial-scale=1" name="viewport" />
<title>Página inicial</title>
<style>
  @media (max-width: 575.98px) {
    #card{
   float:right;
   margin-right: 70px;
   margin-bottom: 5px;
  }
  #card2{
   float:right;
   margin-right: 70px;
    
  }
}
/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {
  #card{
    float:right;
    margin-right:77px;
    margin-bottom: 5px;
  }
  #card2{
    float:right;
    margin-right: 77px;
  }
}
 @media (min-width: 768px) and (max-width: 991.98px) {
#card{
  float:right;
}
 }
/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
#card{
  float:right;
}
}
/* Extra large devices (large desktops, 200px and up) */
</style>

@section('body')
    <div class="jumbotron bg-light">
      <h1 class="display-4 text-center">Bem vindo!</h1>
      <h2 class="text-center">Você deseja,</h2>
      <div class="container-fluid">
      <div class="row">
        <div id="carddiv" class="col-md-6 col-sm-12">
            <div id="card" class="card text-white bg-info" style="width: 16rem; margin-left: 235px">
              <div class="card-body">
                <h5 class="card-title">Orçamentos</h5>
                <p class="card-text">Ir para a tabela com todos os orçamentos já cadastrados.</p>
                <a href="/orcamentos" class="btn btn-outline-light">Clique aqui</a>
            </div>
          </div>
        </div>
       
          <div id="carddiv2" class="col-md-6 col-sm-12">
          <div id="card2" class="card text-white bg-info" style="width: 16rem; margin-left: 5px;">
            <div class="card-body">
              <h5 class="card-title">Cadastrar</h5>
              <p class="card-text">Cadastrar novos orçamentos para sua oficina.</p>
              <a href="/cadastro" class="btn btn-outline-light">Clique aqui</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection