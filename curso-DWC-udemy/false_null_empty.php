<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
        echo '<p>Declaramos as seguintes variáveis: funcionario1, funcionario2 e funcionario3, onde funcionario1 recebe null ($funcionario1 = null),  funcionario2 recebe vazio ($funcionario2 = "") e funcionario3 recebe false ($funcionario3 = false).</p>';

        $funcionario1 = null;
        $funcionario2 = ''; 
        $funcionario3 = false;

        echo 'Criamos uma estrutura if/else com a função ins_null() para verificar se as variáveis são ou não null. <br>';

        echo "<br><b>Testando variável funcionario1:</b><br>";
        if(is_null($funcionario1)) {
            echo "Sim, a variável é null!";
        } else {
            echo "Não, a variável não é null!";
        }
        echo "<br><b>Testando variável funcionario2:</b><br>";
        if(is_null($funcionario2)) {
            echo "Sim, a variável é null!";
        } else {
            echo "Não, a variável não é null!";
        }
        echo "<br><b>Testando variável funcionario3:</b><br>";
        if(is_null($funcionario3)) {
            echo "Sim, a variável é null!";
        } else {
            echo "Não, a variável não é null!";
        }
        
        echo '<br>';
        
        echo '<br>Criamos uma estrutura if/else com a função empty() para verificar se as variáveis são ou não vazias. <br>';

        echo "<br><b>Testando variável funcionario1:</b><br>";
        if(empty($funcionario1)) {
            echo "Sim, a variável é vazia!";
        } else {
            echo "Não, a variável não é vazia!";
        }
        echo "<br><b>Testando variável funcionario2:</b><br>";
        if(empty($funcionario2)) {
            echo "Sim, a variável é vazia!";
        } else {
            echo "Não, a variável não é vazia!";
        }
        echo "<br><b>Testando variável funcionario3:</b><br>";
        if(empty($funcionario3)) {
            echo "Sim, a variável é vazia!";
        } else {
            echo "Não, a variável não é vazia!";
        }
        
        echo '<br>';

        echo '<h4>É importante atentar para o fato de que somente variáveis null são reconhecidas como null, mas tanto as variáveis null, empty (vazia) quanto as variáveis false, são consideradas vazias. Isso pode causar muita confusão na hora de analisar erros, pois, esses erros, são muito difíceis de serem detectados.</h4>';


    ?>

</body>
</html>