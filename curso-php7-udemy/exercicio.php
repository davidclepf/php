<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/estilo.css">
    <link rel="stylesheet" href="/assets/css/exercicio.css">
    <title>Exercício PHP </title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

   <nav class="navegacao">
       <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
       <a href="index.php" class="vermelho">Voltar</a>
   </nav>

   <main class="principal">
       <div class="conteudo">
            <?php
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                
                include("{$_GET['dir']}/{$_GET['file']}.php")

            ?>
        </div>
   </main>

    <footer class="rodape">
        Curso PHP - Cod3r &COPY; <?= date('Y');?>
    </footer>
</body>
</html>