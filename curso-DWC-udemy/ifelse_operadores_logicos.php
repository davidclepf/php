<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>

    <style>
        body {
            padding: 30px 50px;
        }
        table {
            text-align: center;  
            width: 700px;  
        }
        th {
            font-size: 16pt;
            padding: 10px;
        }
       
        td {
            padding: 5px;
            font-size: 14pt;
        }
        .tabela {
            background-color: #ccc;
        }
        .tabela2 {
            background-color: #eee;
        }
        
    </style>
</head>
<body>
    
<h1>Operadores Lógicos</h1>

<p>Servem para conectar operações criando condições mais complexas de decisão.</p>

    <!-- Tabela início -->
    <table margin="50%">
        <tr class="tabela">
            <th>Operador</th>
            <th>Uso</th>
        </tr>

        <tr class="tabela2">
            <td>
                AND ou &&
            </td>
            <td>
                Operador 'E'. É verdadeiro se todas as expressões forem verdadeiras.
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                OR ou ||
            </td>
            <td>
                Operador 'OU'. É verdadeiro se pelo menos uma das expressões for verdadeira.
            </td>        
        </tr>

        <tr class="tabela2">
            <td>
                XOR
            </td>
            <td>
                Operador OU Exclusivo. É verdadeiro se apenas uma das expressões for verdadeira.
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                !
            </td>
            <td>
                Operador NOT. Inverte o valor da expressão. True vira false e false vira true.
            </td>        
        </tr>            
    </table> 
    <br>
    <!-- Tabela Fim -->

    <?php
        
        echo '<hr>';
        echo '<br>';

        echo 'E: 5 é igual a 3 e 10 é menor que 3? <br>';
        if (5 == 3 && 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<br>';
        
        echo '<br>OU: 4 é igual a 4 ou 10 é maior que 15? <br>';
        if (4 == 4 || 10 > 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<br>';
        
        echo '<br>XOR: Somente 4 é igual a 4 ou somente 10 é menor que 15?  <br>';
        if (4 == 4 xor 10 < 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<br>';

        echo '<br>NOT(Negação): Não(a = b)?  <br>';
        if (! ('a' == 'b')) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<br>';

    ?>
</body>
</html>