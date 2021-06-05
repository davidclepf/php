<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
        echo "<h2>Sintaxe</h2>";

        echo "<h3>If / Else </h3>";
        echo '<b>if(condição) { </b><br>';
        echo 'trecho do código à ser executado (será executado se a condição for verdadeira)<br>';
        echo '<b>} else {</b><br>';
        echo 'trecho do código à ser executado(será executado caso a condição for falsa)<br>}';
                    
        echo '<br>';
                    
        echo "<h3>Elseif</h3>";
        echo '<b>if(condição) {</b> <br>';
        echo 'trecho do código à ser executado (será executado se a condição for verdadeira)<br>';
        echo '<b>}esleif(condição) {</b><br>';
        echo 'trecho do código a ser executado(será executado caso a primeira condição seja false e a segunda verdadeira) <br>';
        echo '<b>} else {</b><br>';
        echo 'trecho do código à ser executado (será executado caso as duas condições sejam falsas)';    
                     
                    


    ?>
</body>
</html>