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

<h1>Funções Nativas para Tarefas Matemáticas</h1>

    <!-- Tabela início -->
    <table margin="50%">
        <tr class="tabela">
            <th>Função</th>
            <th>Resultado</th>
        </tr>

        <tr class="tabela2">
            <td>
                ceil(número)
            </td>
            <td>
                Arredonda o valor para cima
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                floor(número)
            </td>
            <td>
                Arredonda o valor para baixo
            </td>        
        </tr>

        <tr class="tabela2">
            <td>
                round(número)
            </td>
            <td>
                Arredonda o valor com base nas casas decimais
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                rand()
            </td>
            <td>
                Gera um número randômico (aleatório)
            </td>        
        </tr>
        <tr class="tabela2">
            <td>
                sqrt(número)
            </td>
            <td>
                Retorna a raíz quadrada
            </td>        
        
    </table> 
    <!-- Tabela Fim -->
    
    <br>
    <hr>
    <br>

    <?php
        
        echo "<b>Arredonda para cima (ceil)</b><br>";
        echo "O número usado é 7.3 <br>";
        echo 'Resultado de ceil(7.3) é: ' . ceil(7.3);

        echo '<br>';

        echo "<br><b>Arredonda para baixo (floor)</b><br>";
        echo "O número usado é 6.99 <br>";
        echo 'Resultado de floor(6.99) é: ' . floor(6.99);

        echo '<br>';

        echo "<br><b>Arredonda de acordo com a fração (round)</b><br>";
        echo "O número usado é 6.5 <br>";
        echo 'Resultado de round(6.5) é: ' . round(6.5);
        echo "<br>O número usado é 6.49 <br>";
        echo 'Resultado de round(6.49) é: ' . round(6.49);
        
        echo '<br>';
        
        echo "<br><b>Gera um valor aleatório(rand)</b><br>";
        echo "Sem parâmetro será gerado um número aleatório entre zero e o maior número suportado pelo sistema.<br>";
        echo 'Resultado de rand() será: ' . rand();
        echo "<br>Passando dois números como parâmetro será gerado um número aleatório entre os números informados.<br>";
        echo 'Resultado de rand(5, 50) será: ' . rand(5, 50);

        echo '<br>';

        echo "<br><b>Raiz quadrada (sqrt)</b><br>";
        echo "Retorna a raíz quadrada de um  número.<br>";
        echo 'Resultado de sqrt(4324) será: ' . sqrt(4324);
        
    
    ?>

    
</body>
</html>