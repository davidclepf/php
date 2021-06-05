<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>
    <?php

        echo "<h3>Podemos fazer a concatenação de variáveis com texto usando os operadores '.' ou ',' </h3>";
        
        // Atribuindo valor para as variáveis
        $nome = 'João';
        $idade = 29;
        $cor = 'Vermelho';
        $altura = 1.82;
        
        // Concatenando as variáveis com texto
        echo "Olá, " . $nome . "! Conforme os dados informados, você tem " , $idade , " anos, sua altura é " . $altura , " e sua cor favorita é " . $cor . "!";
        
        echo "<hr>";
        
        echo "<h3>Também podemos fazer a concatenação de variáveis com texto usando áspas duplas.</h3>";
        echo "<p>Uma forma mais prática de fazer concatenação de variáveis com texto é colocando o texto entre áspas duplas.</p>";
        echo "Olá, $nome! Conforme os dados informados, você tem $idade anos, sua altura é $altura e sua cor favorita é $cor!";
        
        ?>

</body>
</html>