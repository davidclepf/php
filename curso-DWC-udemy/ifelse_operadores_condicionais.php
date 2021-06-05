<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>

    <?php

    // ==
    echo "<h3>Condicional == (Igual)</h3>";
    echo "2 == '2' (2 é igual a '2')? : ";
    if(2 == '2') {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // ===
    echo "<h3>Condicional === (Idêntico)</h3>";
    echo "2 === '2' (2 é idêntico a '2')? : ";
    if(2 === '2') {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }
    
    // != ou <>
    echo "<h3>Condicional != ou <> (Diferente)</h3>";
    echo "2 <> '2' (2 é diferente de '2')? : ";
    if(2 === '2') {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // !==
    echo "<h3>Condicional !== (Não Idêntico)</h3>";
    echo "2 !== '2' (2 é não idêntico a '2')? : ";
    if(2 !== '2') {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // <
    echo "<h3>Condicional < (Menor que)</h3>";
    echo "4 < 10 (4 é menor que 10)? : ";
    if(4 < 10) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // >
    echo "<h3>Condicional < (Maior que)</h3>";
    echo "4 > 10 (4 é maior que 10)? : ";
    if(4 > 10) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // <=
    echo "<h3>Condicional < (Menor ou Igual)</h3>";
    echo "4 <= 4 (4 é menor ou igual a 4)? : ";
    if(4 <= 4) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    // >=
    echo "<h3>Condicional < (Maior ou Igual)</h3>";
    echo "4 >= 8 (4 é maior ou igual a 8)? : ";
    if(4 >= 8) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }







    ?>
    
</body>
</html>