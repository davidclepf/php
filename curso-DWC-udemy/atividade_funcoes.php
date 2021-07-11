<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>

    <?php

        function calcularImposto($valorBase) {
            $imposto = 0;

            if($valorBase <= 1903.98) {
                $imposto = 'Isento';

            } elseif($valorBase >= 1903.99 && $valorBase <=  2826.65) {
                $imposto = ($valorBase * 7.5) / 100;

            } elseif($valorBase >= 2826.66 && $valorBase <= 3751.05) {
                $imposto = ($valorBase * 15) / 100;

            } elseif($valorBase >= 3751.06 && $valorBase <= 4664.68) {
                $imposto = ($valorBase * 22.5) / 100;
                
            } else {
                $imposto = ($valorBase * 27.5) / 100;
            }

            return $imposto;
        }

        echo calcularImposto(5000);

       
    ?>
    
</body>
</html>