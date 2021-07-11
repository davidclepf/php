<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curto PHP</title>
</head>
<body>
    <h1>Operadores Aritméticos</h1>
    <ul>
    <li><b>Adição (+) -></b> Soma Valores</li>
    <li><b>Subtração (-) -></b> Subtrai Valores</li>
    <li><b>Multiplicação (*) -></b> Produto dos Valores</li>
    <li><b>Divisão (/) -></b> Quociente dos Valores</li>
    <li><b>Módulo (%) -></b> Resto de uma Divisão</li>
    </ul>
    
    <hr>
    
    <?php

        echo '<h2>Variáveis</h2>';
        echo '<b>$num1 = 13;</b><br>';
        echo '<b>$num2 = 4;</b><br>';

        $num1 = 13;
        $num2 = 4;
        
        echo '<br>';
        
        echo '<h3>Adição</h3>';
        echo '$num1 + $num2<br>';
        echo "<b>Resultado: </b>A soma entre $num1 e $num2 é = " . ($num1 + $num2);
        
        echo '<br>';

        echo '<h3>Subtração</h3>';
        echo '$num1 - $num2<br>';
        echo "<b>Resultado: </b>A diferença entre $num1 e $num2 é = " . ($num1 - $num2);

        echo '<br>';

        echo '<h3>Multiplicação</h3>';
        echo '$num1 * $num2<br>';
        echo "<b>Resultado: </b>O produto de $num1 e $num2 é = " . ($num1 * $num2);

        echo '<br>';

        echo '<h3>Divisão</h3>';
        echo '$num1 / $num2<br>';
        echo "<b>Resultado: </b>O quociente de $num1 e $num2 é = " . ($num1 / $num2);

        echo '<br>';

        echo '<h3>Módulo</h3>';
        echo '$num1 % $num2<br>';
        echo "<b>Resultado: </b>O resto da divisão entre $num1 e $num2 é = " . ($num1 % $num2);


    ?>
</body>
</html>