<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>
    <p><b>Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos numéricos entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números aleatósrios contidos no array não podem ser repetidos.</b></p>
    <?php

        // WHILE    
        echo "<h1>1) While</h1>";
        
        $numeros = []; // Criando um array vazio

        while(count($numeros) <= 5) { // count retorna o número de itens do array. enquanto o número de itens for
            $num = rand(1, 60);
            if(!in_array($num, $numeros)) {
                $numeros[] = $num;
                echo "O número sorteado foi: $num <br>";
                
            }
        }
        
        echo "<p><b>Os 6 números sorteados são: </b>" . implode(" | ", $numeros) . "</p><br>";
        

        // DO/WHILE
        echo "<h1>2) Do / While</h1>";
        
        $numeros = [];
        
        do {
            $num = rand(1, 60);
            if(!in_array($num, $numeros)) {
                $numeros[] = $num;
                echo "O número sorteado foi: $num <br>";
            }
        }
        while(count($numeros) <= 5);
        
        echo "<p><b>Os 6 números sorteados são: </b>" . implode(" | ", $numeros) . "</p><br>";
        
        

        // FOR
        echo "<h1>3) For</h1>";
        for($numeros = []; count($numeros) <= 5; $num = rand(1, 60)) {
            if(!in_array($num, $numeros)) {
                $numeros[] = $num;
                echo "O número sorteado foi: $num <br>";
            }
        }
        echo "<p><b>Os 6 números sorteados são: </b>" . implode(" | ", $numeros) . "</p><br>";
    ?>
    
</body>
</html>