<?php
  // chamar o script 'validador_acesso' que verificará se o acesso é válido.
  require_once "validador_acesso.php";

  // declarando o array que conterá os chamados
  $chamados = [];

  // abrir o arquivo.hd (onde ficam registrados os chamados)
  $arquivo = fopen('app_help_desk/arquivo.hd', 'r'); // o parâmetro 'r' abre o arquivo somente para leitura

  // Percorre o arquivo enquanto houver registros (linhas) a serem recuperados.
  while(!feof($arquivo)) { // testa pelo fim de um arquivo
    $registro = fgets($arquivo); // retorna o conteúdo das linhas do arquivo
    $chamados[] = $registro;
  }

  fclose($arquivo);

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="navbar-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
             
             <?php
                // usando o foreach para percorrer e salvar os dados do array chamados
                foreach($chamados as $chamado) { ?>

                <?php

                  // Usando o explode para criar um array com base no delimitador '#'
                  $chamado_dados = explode('#', $chamado);

                  // verificar qual o perfil do usuário
                  if($_SESSION['perfil_id'] == 2) { // se igual a 2 só exibirá os chamados do próprio usuário logado
                    if($_SESSION['id'] != $chamado_dados[0]) { // verifica se o id do chamado é diferente do id do usuário logado
                      continue; // se for nada será feito
                    }

                  }

                  // verificar se os chamdos contém todos os parâmetros e não exibir os que estiverem em branco ou incompletos
                  if(count($chamado_dados) < 3) {
                    continue;
                  }

                ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <!-- Recuperando as informações do array chamado_dados -->
                    <h5 class="card-title"><?php echo $chamado_dados[1]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[2] ?></h6>
                    <p class="card-text"><?php echo $chamado_dados[3] ?></p>

                  </div>
                </div>
              <?php } ?> <!-- fechamento do foreach -->

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>