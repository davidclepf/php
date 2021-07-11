<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php

        echo "<p>Constantes, como o próprio nome indica, são variáveis que, após criadas, não podem ter seu valor alterado.<p>";
        
        echo "<p>Existem duas formas de criar uma constante: usando a função 'define()' ou usando 'const'.<p>";
        echo "Exemplo de como criar uma constante usando define():<br>
        define('NOME_DA_CONSTANTE', valor_a_ser_atribuido)<br>";
        
        echo "<br>";
        
        echo "Exemplo de como criar uma constante usando const:<br>
        const NOME_DA_CONSTANTE = valor_a_ser_atribuido <br>";
        echo "<b>Obs:</b> As constantes, por padrão, são definidas em MAIÚSCULAS.<br>";
        echo "<b>Obs2:</b> Não é usado o '$' para definir uma constante.<br>";

        echo "<br>";

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        const BD_SENHA = 'senha_dev';

        echo BD_URL . '<br>';
        echo BD_USUARIO . '<br>';
        echo BD_SENHA . '<br>';


    ?>

</body>
</html>