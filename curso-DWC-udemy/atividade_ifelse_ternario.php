<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>
    <h1>Atividade If/Else / Operadores Ternários</h1>

    <p><b>Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis $idade e $peso no processo. Neste primeiro momento faça a atribuição de valores às variáveis de forma estática, ou seja, no processo de atribuição.</b></p>
    <p>Se a idade informada estiver entre (e  inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos", caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos".</p>

    <?php
        echo "<h2>Pessoa 1</h2>";
        echo "<p><b>Idade: </b>16</p>";
        echo "<p><b>Peso: </b>50</p>";
        $idade = 16;
        $peso = 50;
        // Usando If/Else
        if($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "Atende aos requisitos!";
        } else {
            echo "Não atende aos requisitos!";
        }

        echo '<hr>';

        echo "<h2>Pessoa 2</h2>";
        echo "<p><b>Idade: </b>69</p>";
        echo "<p><b>Peso: </b>60</p>";
        $idade = 69;
        $peso = 60;
        // Usando Operadores Ternários
        $resultado = $idade >= 16 && $idade <= 69 && $peso >= 50 ? "Atende aos requisitos!" : "Não atende aos requisitos!";
        echo $resultado;        

        echo '<hr>';

        echo "<h2>Pessoa 3</h2>";
        echo "<p><b>Idade: </b>30</p>";
        echo "<p><b>Peso: </b>82</p>";
        $idade = 30;
        $peso = 82;

        if($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "Atende aos requisitos!";
        } else {
            echo "Não atende aos requisitos!";
        }

        echo '<hr>';
        
        echo "<h2>Pessoa 4</h2>";
        echo "<p><b>Idade: </b>15</p>";
        echo "<p><b>Peso: </b>55</p>";
        $idade = 15;
        $peso = 55;
        // Usando If/Else
        if($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "Atende aos requisitos!";
        } else {
            echo "Não atende aos requisitos!";
        }

        echo '<hr>';
        
        echo "<h2>Pessoa 5</h2>";
        echo "<p><b>Idade: </b>17</p>";
        echo "<p><b>Peso: </b>45</p>";
        $idade = 17;
        $peso = 45;
        // Usando If/Else
        if($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "Atende aos requisitos!";
        } else {
            echo "Não atende aos requisitos!";
        }

        echo '<hr>';

        echo "<h2>Pessoa 6</h2>";
        echo "<p><b>Idade: </b>70</p>";
        echo "<p><b>Peso: </b>65</p>";
        $idade = 70;
        $peso = 65;
        // Usando Operadores Ternários
        $resultado = ($idade >= 16 && $idade <= 69 && $peso >= 50) ? "Atende aos requisitos!" : "Não atende aos requisitos!";
        echo $resultado;
      
    ?>
    
</body>
</html>