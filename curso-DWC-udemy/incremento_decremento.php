<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <title>Curso PHP</title>
</head>
<body>

<h1>Operadores de Incremento e Decremento</h1>

    <!-- Tabela início -->
    <table margin="50%">
        <tr class="tabela">
            <th>Operador</th>
            <th>Função</th>
        </tr>

        <tr class="tabela2">
            <td>
                ++$a
            </td>
            <td>
                Pré-incremento. Adiciona uma unidade antes de retornar $a
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                $a++
            </td>
            <td>
                Pós-incremento. Retorna $a e depois adiciona uma unidade
            </td>        
        </tr>

        <tr class="tabela2">
            <td>
                --$a
            </td>
            <td>
            Pré-decremento. Diminui uma unidade antes de retornar $a
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                $a--
            </td>
            <td>
                Pós-decremento. Retorna $a e depois diminui uma unidade
            </td>        
        </tr>
    </table> 
    <!-- Tabela Fim -->
    
    <br>
    <hr>
    <br>

    <?php
        echo '<b>Declarada a variável $a = 7</b><br>';
        $a = 7;

        echo '<h3>Pós-Incremento ($a++) </h3>';
        echo "O valor contido na variável a é $a <br>";
        echo "O valor contido na variável a após o incremento é " . $a++ . "<br>";
        echo "O valor atualizado da variável a é $a";
        
        echo '<h3>Pré-Incremento (++$a) </h3>';
        $a = 7;
        echo "O valor contido na variável a é $a <br>";
        echo "O valor contido na variável a pré incremento é " . ++$a . "<br>";
        echo "O valor atualizado da variável a é $a";
        
        echo '<h3>Pós-Decremento ($a--) </h3>';
        $a = 7;
        echo "O valor contido na variável a é $a <br>";
        echo "O valor contido na variável a após o incremento é " . $a-- . "<br>";
        echo "O valor atualizado da variável a é $a";
        
        echo '<h3>Pré-Decremento (--$a) </h3>';
        $a = 7;
        echo "O valor contido na variável a é $a <br>";
        echo "O valor contido na variável a pré incremento é " . --$a . "<br>";
        echo "O valor atualizado da variável a é $a";
    
    ?>


    
</body>
</html>