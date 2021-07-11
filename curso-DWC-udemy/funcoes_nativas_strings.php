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

<h1>Funções Nativas para Manipular Strings</h1>

    <!-- Tabela início -->
    <table margin="50%">
        <tr class="tabela">
            <th>Função</th>
            <th>Resultado</th>
        </tr>

        <tr class="tabela2">
            <td>
                strtolower(texto)
            </td>
            <td>
                Transforma todos os caracteres da string em minúsclas
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                strtoupper(texto)
            </td>
            <td>
                Transforma todos os caracteres da string em MAIÚSCULAS
            </td>        
        </tr>

        <tr class="tabela2">
            <td>
                ucfirst(texto)
            </td>
            <td>
                Transforma o primeiro caracter da string em Maiúscula
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                strlen(texto)
            </td>
            <td>
                Conta a quantidade de caracteres de uma string
            </td>        
        </tr>
        <tr class="tabela2">
            <td>
                str_replace(procuraPor, substituiPor, texto)
            </td>
            <td>
                Substitui uma cadeia de caracteres por outra dentro de uma string 
            </td>        
        </tr>
        <tr class="tabela">
            <td>
                substr(texto, posiçãoInicial, qtdeCaractere)
            </td>
            <td>
                Retorna parte de uma string
            </td>        
        </tr>
    </table> 
    <!-- Tabela Fim -->
    
    <br>
    <hr>
    <br>

    <?php
        echo "<h2>O texto que usaremos como exemplo será 'Curso Completo de PHP'</h2>";

        $texto = 'Curso Completo de PHP';

        echo "<b>String to lower (strtolower)</b><br>";
        echo "$texto <br>";
        echo strtolower($texto);

        echo '<br>';

        echo "<br><b>String to upper (strtoupper)</b><br>";
        echo "$texto <br>";
        echo strtoupper($texto);

        echo '<br>';

        echo "<br><b>Upper case first (ucfirst)</b><br>";
        echo "$texto <br>";
        echo ucfirst($texto);

        echo '<br>';

        echo "<br><b>String length (strlen)</b><br>";
        echo "$texto <br>";
        echo strlen($texto);

        echo '<br>';

        echo "<br><b>String replace (str_replace)</b><br>";
        echo "$texto <br>";
        echo str_replace('PHP', 'JavaScript', $texto);

        echo '<br>';

        echo "<br><b>Sub string (substr)</b><br>";
        echo "$texto <br>";
        echo substr($texto, 6, 8);
    
    ?>

    
</body>
</html>