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

<h1>Funções Nativas para Manipular Datas</h1>

    <!-- Tabela início -->
    <table margin="50%">
        <tr class="tabela">
            <th>Função</th>
            <th>Resultado</th>
        </tr>

        <tr class="tabela2">
            <td>
                date(formato)
            </td>
            <td>
                Recupera a data atual
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                date_default_timezone_get(timezone)
            </td>
            <td>
                Recupera o timezone default da aplicação
            </td>        
        </tr>

        <tr class="tabela2">
            <td>
            date_default_timezone_set(timezone)
            </td>
            <td>
                Atualiza o timezone default da aplicação
            </td>        
        </tr>

        <tr class="tabela">
            <td>
                strtotime(data)
            </td>
            <td>
                Transforma datas textuais em segundos
            </td>        
        </tr>
        
    </table> 
    <!-- Tabela Fim -->
        <br>
    <hr>
    <br>

    <?php
        
        echo "<b>Recuperação da data atual/data corrente (date)</b><br>";
        echo 'Resultado de date("d, F / Y") é: '; echo date('d F / Y') ;
        echo '<br>Resultado de date("H:i") é: '; echo date('H:i') ;
        echo '<br><b>Obs: </b>Existem várias opções de exibição do formato da data. Verificar o manual PHP: <a href="https://www.php.net/manual/en/datetime.format.php" target="_blank"> Manual PHP DateTime</a> para maiores detalhes.';
            
        echo '<br>';
            
        echo "<br><b>Recuperação do timezone default</b>";
        echo '<br>Resultado de date_default_timezone_get()  é: '. date_default_timezone_get(); 
            
        echo '<br>';
            
        echo "<br><b>Alterando o timezone no tempo de execução</b>";
        echo '<br>Alterando o timezone:  date_default_timezone_set("America/Sao_Paulo").<br>'; date_default_timezone_set('America/Sao_Paulo'); 
            
        echo '<br>';
        
        echo '<hr>';
        echo '<br>';

        echo "<b>Transformando datas em segundos - strtotime</b><br>";
        echo 'Serão criadas as variáveis $dataInicial = 2021-01-01 e $dataFinal = 2021-05-27 <br>';
        $dataInicial = '2021-01-01';
        $dataFinal = '2021-05-27';
        
        echo "A data inicial baseada nos sistemas Unix é 01/01/1970 <br>";
        echo '<br>Serão criadas duas variáveis para receber a conversão das datas.$timeInicial = strtotime($dataInicial) e $timeFinal = strtotime($dataFinal) <br>';

        $timeInicial = strtotime($dataInicial);$timeFinal = strtotime($dataFinal);

        echo "Data Inicial = $dataInicial - $timeInicial<br>";
        echo "Data Final = $dataFinal - $timeFinal<br>";

        echo '<br>';
        
        $diferencaTimes = $timeFinal - $timeInicial;
        echo "A difernça de segundos entre a data inicial e a data final é: $diferencaTimes <br>";
        
        echo '<br>';
        
        $segundosDia = 24 * 60 * 60;
        echo "Um dia possui $segundosDia segundos<br>";
        
        echo '<br>';

        $diferencaDiasDatas = $diferencaTimes / $segundosDia;
        echo "A diferença em dias é $diferencaDiasDatas dias.";







        
    
    ?>

    
</body>
</html>