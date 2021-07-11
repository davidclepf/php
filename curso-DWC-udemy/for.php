<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curo PHP</title>
</head>
<body>
    
    <?php
        echo '<h1>For</h1>';

        echo '<b>Sintaxe do While:</b><br>';
        echo 'while(condição) {<br>';
        echo '<br>';
        echo '}<br>';
        
        echo '<br><b>Sintaxe do Do/While:</b><br>';
        echo 'do {<br>';
        echo '<br>';
        echo '} while(condição);<br>';
        
        echo '<br><b>Sintaxe do For:</b><br>';
        echo 'for(variável; condição; incremento) {<br>';
        echo '<br>';
        echo '}<br>';

        echo '<br>';

        echo 'Exemplo:<br>';
        for($x = 1; $x <= 10; $x++) {
            echo "X = $x <br>";
        }

        echo '<br>';

        echo '<b>Usando break:</b><br>';
        for($x = 11; true ; $x++) {
            if($x >= 20) {
                break; // qdo x for maior ou igual a 20 break é invocado e sai do laço de repetição
            }
            echo "X = $x <br>";
        }
        // O segundo parâmetro também pode ser deixado em branco que mesmo assim receberá o valor true

    ?>

</body>
</html>