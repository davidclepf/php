<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>

    <?php
        echo '<h1>Do While</h1>';

        echo '<p>Enqunato no laço while a condição de parada é definida logo no início do laço, no do while a condição é definida no final, fazedo com que o bloco de código seja rodado pelo menos uma vez.</p>';

        $x = 10;
        do {
            echo 'Entrou no do/while';
        } while($x < 9); // executará o bloco de código enquanto x for menor que 9.
        
        // Mesmo x recebendo o valor 10, que é maior que 9 o código é executado 1 vez, pois ele está antes do critério de parada.
        
        // O mesmo exemplo com while não será executado nem uma vez, conforme abaixo.
        while($x < 9) {
            echo 'Entrou no while';
        }

        echo '<br>';
        
        echo '<p>Outro exemplo</p>';

        $x = 1;
        do {
            echo "X = $x <br>";
            $x++; // incremento
        } while($x < 9); // executará o bloco de código enquanto x for menor que 9.
        ?>
    
</body>
</html>