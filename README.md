Descrição
Para participar do processo seletivo eu escolhi resolver o exercício número 1. O objetivo do exercício é a criação de um CRUD para facilitar o manuseamento de dados de uma oficina e monitorar seus orçamentos que antes eram controlados por meio de papel e caneta, fazendo assim com que eles perdessem muitas vendas.

Ferramentas
Para a realização do exercício eu utilizei as seguintes ferramentas:

Visual Studio Code - Editor de código.
Xampp - Para testar o site através de um servidor local com o apache e o banco de dados através do phpMyAdmin.

as linguagens utilizadas foram:
PHP - Realizar a busca dos dados, conectar com o banco de dados e ações de server-side;
Javascript - Dinamizar o datatable e as mensagens do SweetAlert;
SQL - Utilizado para criar o banco.
linguagem de marcação:

HTML5 - Criar as páginas;
folha de estilo:

CSS3 - Estilizar as páginas, utilizado apenas para posicionar alguns elementos ou realizar alterações básicas.

Frameworks/bibliotecas
Laravel 
Bootstrap - Utilizado para estilizar as páginas.
Datatable - Bibliotecas do datatable para a criação da tabela e demais alterações na mesma.
Jquery - dinamizar a tabela e para criação dos filtros.
SweetAlert - Retornar mensagens mais "intimistas" para o usuário após alguma ação.
FontAwesome - ícones para deixar o site mais intuitivo e facilitar a utilização pelo usuário.

Modo de Funcionamento
O site é dividido em 3 páginas principais para o usuário, nelas será possível realizar todas as ações necessárias para organizar os orçamentos da oficina.

index

![image](https://user-images.githubusercontent.com/42790322/95242541-b32e6700-07e5-11eb-9dfc-6c24d7a9b0b3.png)

Essa é a tela principal do site. Nela é possível pesquisar os dados apresentados na tabela e através dos botões presentes na mesma é possível realizar as outras ações do CRUD.

O botão "Novo orçamento" irá redirecionar para a pagina "cadastro.php", tela onde será realizado os cadastros de novos orçamentos.



O botão "Deletar" retornará uma mensagem para o usuário realizar o delete.



O botão "Editar" irá redirecionar para a página "alterar.php", esta tela terá todos os dados do orçamento a ser alterado e o usuário terá livre acesso para editar qualquer informação presente.


Além dessas páginas, existem outras files no projeto que não são vistas diretamente pelo usuário final, são elas:

Para navegação do site é necessário utilizar os botões e filtros inseridos, para realizar as ações do CRUD, e responder as mensagens de retorno para cada ação.

Necessidades para execução do projeto
Para facilitar a correção do teste, o site foi hospedado no seguinte link:
https://testethyago.000webhostapp.com/

Para executar o projeto de forma local é de suma importância:

Extensão do php, html5 e css (utilizei a versão 7.4 do php);
Banco de dados (de preferência phpMyAdmin);
Ter o php em seu pacote de variáveis;
Um editor de texto ou uma IDE (de preferência o visual studio code);
O servidor apache para o host local.
Os links para baixar tais ferramentas.

Xampp
Visual Studio Code
As demais bibliotecas/ferramentas já estão importadas no próprio código, não sendo necessário baixá-las ou realizar qualquer alteração.
Para uma melhor visibilidade do site, recomendo utilizar o google chrome para testá-lo.
