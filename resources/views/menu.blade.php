<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
     <!--parte responsiva-->
     <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
         <span class="navbar-toggler-icon"></span>
     </button>
     
     <!--navegacao-->
 <div class = "collapse navbar-collapse" id="nav-target">
     <ul class="navbar-nav ml-auto">
         <li @if($current == "index") class="nav-item active" @else class="nav-item" @endif>
             <a href="/" class="nav-link">Página inicial</a> 
         </li>
         <li @if($current == "orcamentos") class="nav-item active" @else class="nav-item" @endif>
             <a href="/orcamentos" class="nav-link">Orçamentos</a>
         </li>
         <li @if($current == "cadastro") class="nav-item active" @else class="nav-item" @endif>
             <a href="/cadastro" class="nav-link">Cadastrar</a>
         </li>
     </ul>
 </div>
 </nav>
 </header>