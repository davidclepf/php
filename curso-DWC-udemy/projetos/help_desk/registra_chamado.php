<?php

    // iniciando a sessão
    session_start();

    // criando variáveis para o dados recebidos por post e buscando pelo caracter '#' e o alterando, pois será usado como caracter de separação
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // formatando o array recebido pelo POST em forma de texto
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; // PHP_EOL gera uma quebra de linha    

    // fopen — Abre um arquivo ou URL
    // caso o arquivo não exista, ele será criado
    // o primeiro parâmetro é o nome do arquivo, o segundo indica que o arquivo será aberto para escrita (existem vários parâmetros)
    $arquivo = fopen('../app_help_desk/arquivo.hd', 'a');

    // recebe dois parâmetros: o primeiro é o nome do arquivo criado com o fopen, e o segundo é o que será escrito no arquivo
    fwrite($arquivo, $texto);

    // fechando o arquivo 
    fclose($arquivo);

    // redirecionando para a página abrir chamado após o término
    header('Location: abrir_chamado.php');
?>