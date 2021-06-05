<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>

    <?php
        // Função void (sem retorno)
        function exibirBoasVindas() {
            echo "Seja bem-vindo!<br>";
        }

        exibirBoasVindas();

        echo '<br>';

        // return (com retorno)
        function calcularArea($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        echo calcularArea(30, 60);
    ?>
    
</body>
</html>