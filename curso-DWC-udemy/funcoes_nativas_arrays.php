<!DOCTYPE html>
<html lang= en >
<head>
    <meta charset= UTF-8 >
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

    <h1>Funções Nativas para Manipular Arrays</h1>


        <!-- Tabela início -->
        <table margin="50%">
            <tr class="tabela">
                <th>Função</th>
                <th>Uso</th>
            </tr>

            <tr class="tabela2">
                <td>
                    is_array(array)
                </td>
                <td>
                    Verifica se o parâmetro é um array
                </td>        
            </tr>

            <tr class="tabela">
                <td>
                    array_keys(array)
                </td>
                <td>
                    Retorna todas as chaves de um array
                </td>        
            </tr>

            <tr class="tabela2">
                <td>
                    sort(array)
                </td>
                <td>
                    Ordena um array e reajusta seus índices
                </td>        
            </tr>

            <tr class="tabela">
                <td>
                    asort(array)
                </td>
                <td>
                    Ordena um array preservando o seu índice
                </td>        
            </tr>

            <tr class="tabela2">
                <td>
                    count(array)
                </td>
                <td>
                    Conta a quantidade de elementos de um array
                </td>        
            </tr>

            <tr class="tabela">
                <td>
                    array_merge(array)
                </td>
                <td>
                    Funde um ou mais arrays
                </td>        
            </tr>

            <tr class="tabela2">
                <td>
                    explode(array)
                </td>
                <td>
                    Divide uma string baseada em um delimitador
                </td>        
            </tr>

            <tr class="tabela">
                <td>
                    implode(array)
                </td>
                <td>
                    Junta elementos de um array em uma string
                </td>        
            </tr>
        </table> 
        <!-- Tabela Fim -->

        <br>
        <hr>

    <?php
        echo '<h2>1) is_array() => Verifica se o prâmetro passado é um array</h2>';
        
        echo '<p>Criaremos o array $array e a $var e faremos o teste usando is_array. Onde retornará 1 para true e vazio para false.</p>';
        
        $array = ["1", "2", "3"];
        $var = "variável";
        
        echo 'Ao testarmos: echo is_array($array); retornará: <br>';
        echo is_array($array);
        
        echo '<br>Ao testarmos: echo is_array($var); retornará: <br>';
        echo is_array($var);
        
        echo '<br>';
        echo '<hr>';
        
        // ARRAY_KEYS
        echo '<h2>2) array_keys(array) => Retorna todas as chaves de um array </h2>';
        
        echo '<p>Criaremos o array $array = ["1" => "a", "7" => "b", "18" => "c"]; e faremos o teste usando array_keys.</p>';

        $array = ["1" => "a", "7" => "b", "18" => "c"];

        echo 'Listando o array com print_r($array) e formatando com a tag html pre<br>';

        echo '<pre>';
        print_r($array);
        echo '</pre>';
        
        echo 'Usando a função print_r(array_keys($array)); será gerado um novo array cujo conteúdo são as chaves do array informado, então teremos:<br>';
        print_r(array_keys($array));
        echo '<br>';
        
        echo '<br>';
        echo '<hr>';
        
        // SORT_ARRAY
        echo '<h2>3) sort(array) =>  Ordena um array e reajusta seus índices</h2>';
        
        echo '<p>Criaremos o array $novoArray = ["teclado", "mouse", "cabo hdmi", "gabinete", "monitor", "memória"]; </p>';
        
        $novoArray = ["teclado", "mouse", "cabo hdmi", "gabinete", "monitor", "memória"];
        
        echo 'Listando o array com print_r($novoArray) e formatando com a tag html pre<br>';

        echo '<pre>';
        print_r($novoArray);
        echo '</pre>';
        
        echo 'A função sort reorganiza o array o ordenando<br>';
        sort($novoArray);
        
        echo '<br>Listando o array com print_r($novoArray) após executar a função sort($novoArray); e formatando com a tag html pre<br>';

        echo '<pre>';
        print_r($novoArray);
        echo '</pre>';
        
        echo "O array foi reorganizado em ordem alfabética e seu índice também foi reorganizado.<br>";

        echo '<br>';
        echo '<hr>';

        // ASORT
        echo '<h2>4) asort(array) =>  Ordena um array preservando o seu índice </h2>';

        echo '<p>Criaremos o array $novoArray = ["teclado", "mouse", "cabo hdmi", "gabinete", "monitor", "memória"]; </p>';
        
        $novoArray = ["teclado", "mouse", "cabo hdmi", "gabinete", "monitor", "memória"];
        
        echo 'Listando o array com print_r($novoArray) e formatando com a tag html pre<br>';
        
        echo '<pre>';
        print_r($novoArray);
        echo '</pre>';
        
        echo 'A função asort reorganiza o array o ordenando e mantendo o seu índice.<br>';
        asort($novoArray);
        
        echo '<br>Listando o array com print_r($novoArray) após executar a função asort($novoArray); e formatando com a tag html pre<br>';
        
        echo '<pre>';
        print_r($novoArray);
        echo '</pre>';
        
        echo "O array foi reorganizado em ordem alfabética, porém seu índice foi mantido.<br>";
        
        echo '<br>';
        echo '<hr>';
        
        // COUNT
        echo '<h2>5) count(array) =>  Conta a quantidade de elementos de um array</h2>';
        
        echo '<p>Criaremos o array $novoArray = ["teclado", "mouse", "cabo hdmi", "gabinete", "monitor", "memória"]; </p>';
        
        $novoArray = ["teclado", "mouse", "cabo hdmi", "gabinete", "monitor", "memória"];
        
        echo 'Listando o array com print_r($novoArray) e formatando com a tag html pre<br>';
        
        echo '<br>Ao executarmos a função echo count($novoArray); será exibida a quantidade de elementos do array. O retorno é: <br>';
        echo count($novoArray);
              
        
        echo '<br>';
        echo '<hr>';
        
        // ARRAY_MERGE
        echo '<h2>6) array_merge(array) =>  Funde um ou mais arrays</h2>';
        
        echo '<p>Funde arrays em um só.</p>';
        
        echo 'Criaremos os seguintes arrays: $array1 = ["osx", "windows"]; $array2 = ["Linux"]; $array3 = ["solaris"]; <br>';
        $array1 = ["osx", "windows"]; 
        $array2 = ["Linux"]; 
        $array3 = ["solaris"]; 
        
        echo 'Criaremos um novo array com o array_marge: $novo_array = array_merge($array1, $array2, $array3)<br>';        
        
        $novo_array = array_merge($array1, $array2, $array3);
        
        echo '<br>Listando o array com print_r($novo_array) e formatando com a tag html pre<br>';
        
        echo '<pre>';
        print_r($novo_array);
        echo '</pre>';
        
        echo "<b>Os 3 arrays foram fundidos em 1.</b><br>";
        
        echo '<br>';
        echo '<hr>';
        
        // EXPLODE
        echo '<h2>7) explode(array) =>  Divide uma string baseada em um delimitador </h2>';
        
        echo '<p>Criaremos uma variável $data = "27/05/2021"; e usaremos explode para dividir essa string.<br></p>';
        
        $data = "27/05/2021"; 
        
        echo 'Explode retorna um array portanto usaremos: $arrayRetorno = explode("/", $data); onde / é o delimitador e $data é a variável à ser dividida.<br>';
        
        $arrayRetorno = explode("/", $data); 
        
        echo "<br> O retorno será: <br>";
        
        echo '<pre>';
        print_r($arrayRetorno);      
        echo '</pre>';
        
        echo '<br>';
        echo '<hr>';
        
        // IMPLODE
        echo '<h2>8) implode(array) => Junta elementos de um array em uma string</h2>';
        
        echo '<p>Criaremos o array $array = ["a", "b", "x", "y"]; e usaremos implode para juntar os elementos do array em uma string.</p>';
        
        $array = ["a", "b", "x", "y"];
        $stringRetorno = implode(",", $array);

        echo 'Foi criada a variável $stringRetorno = implode(",", $array); onde "," será o separador dos elementos e $array é o array à ser convertido.<br>';

        echo "<br> O resultado é: <br>";

        echo $stringRetorno;
        
        
        
        ?>
    
</body>
</html>