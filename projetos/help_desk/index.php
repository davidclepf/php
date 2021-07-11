<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <!-- Definindo o destino do formulário com 'action' -->
              <form action="valida_login.php" method="post">
                <!-- Definindo o destino do formulário com 'action' -->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?> <!-- isset verifica se 'login', dentro da super global get está setado e depois se seu valor é igual a 'erro' -->                  
                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>
                  
                  <?php } elseif(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>                
                  <div class="text-danger">
                    Favor efetuar o login antes de prosseguir!
                  </div>
                  <?php } ?>
                

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>