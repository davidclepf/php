<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curos PHP</title>
</head>
<body>

    <?php
        // Variável do tipo String
        $nome = 'João da Silva'; // Pdemos usar áspas simples (' ') ou áspas duplas (" ").

        // Variável do tipo Int
        $idade = 29;
        
        // Variável do tipo Float
        $peso = 82.5;
        
        // Variável do tipo Bollean
        $fumante = true; // true = 1 ou false = 0 (no caso de false nada é exibido)

        // Alterando o valor de uma variável
        $idade = 30;

        ?>

    <h1>Ficha Cadastral</h1>
    <p><b>Nome: </b><?= $nome ?> </p>
    <p><b>Idade: </b><?= $idade ?> </p>
    <p><b>Peso: </b><?= $peso ?> </p>
    <p><b>Fumante: </b><?= $fumante ?> </p>
    
</body>
</html>