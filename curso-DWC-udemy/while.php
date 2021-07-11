<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>

    <?php
        echo '<h1>While</h1>';
        echo '<p>O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true. O valor da expressão é checado a cada vez que o laço é iniciado, então, mesmo seu valor mude durante a a execução das declarações aninhadas, a execução não será interrompida até o final da iteração ( cada vez que o PHP executa as declarações dentro do laço é uma iteração). Entretanto, se a expressão do while for avaliada como false desde o início, as declarações aninhadas não serão executadas nenhuma vez. </p>';

        echo '<br>';

        $num = 0;
        echo "--- Início do loop ---<br>";
        while($num <= 10) { // enquanto $num for menor ou igual à 10 o loop será repetido
            echo "$num <br>"; // o valor de $num será impresso
            $num++; // cada vez que o loop rodar $num receberá o incremento de 1.

            // No momento que $num passa a ser maior que 10 o loop é interrompido
        }
        echo "--- Fim do loop ---<br>";

        echo '<br>';
       
        echo '<p>Outro exemplo</p>';
        $num = 0;
        echo "--- Início do loop ---<br>";
        while($num < 50) { 
            echo "$num <br>"; 
            $num +=5; // cada vez que o loop rodar $num receberá o incremento de 5.
        }
        echo "--- Fim do loop ---<br>";
        
        echo '<br>';
        
        echo '<p><b>Estabelecendo um critério de parada usando break.</b></p>';
        
        $num = 0;
        echo "--- Início do loop ---<br>";
        while(true) { //definir wihle como true gerará um loop infinito
            echo "$num <br>";
            $num += 5;
            
            if($num > 100) {
                break;  // qdo num for maior que 100 o break será rodado e interromperá o loop
            }
        }
        echo "--- Fim do loop ---<br>";
        
        echo '<h4>Continue</h4>';
        echo 'O comando continue faz com que o bloco de código a seguir seja ignorado. Ele pula os códigos a seguir.<br>';
        
        $num = 0;
        echo "--- Início do loop ---<br>";
        while($num < 10) { 
            $num ++; // o incremento deverá ficar antes do continue ou não será executado.
            
            if($num == 2 || $num == 6) {
                continue;  // se num for igual a 2 ou igual a 6 o continue será invocado e o comando abaixo não será executado
            }
            echo "$num <br>";
        }
        echo "--- Fim do loop ---<br>";

        
        
    ?>
    
</body>
</html>