<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
        echo "<h1>1. Arrays Básico</h1>";

        echo "<p><h3>Arrays Sequênciais (numéricos)</h3></p>";
        
        $listaFrutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
        
        echo 'Declaramos o seguinte array:<br>';
        echo '$listaFrutas = array("Banana", "Maçã", "Morango", "Uva", "Abacate");<br>';
        echo '<b>Obs: </b>Outra forma de declarar um array é: $listaFrutas["Banana", "Maçã", "Morango", "Uva", "Abacate"];<br>';
        
        echo '<br>Listando o array com a função var_dump($listaFrutas) e formatando com a tag html pre: <br>';
        echo "<pre>";
        var_dump($listaFrutas);
        echo "</pre>";
        
        echo '<br>Listando o array com a função print_r($listaFrutas) e formatando com a tag html pre: <br>';
        echo '<pre>';
        print_r($listaFrutas);
        echo '</pre>';
        
        echo "<p><b>Adicionando novos elementos ao Array</b></p>";
        echo 'Podemo adicionar novos elementos ao array usando $listaFrutas[] = "Abacaxi"; Dessa forma o novo elemento será adicionado ao final do array.<br>';
        $listaFrutas[] = 'Abacaxi';
        echo '<pre>'; 
        print_r($listaFrutas);
        echo'</pre><br>';
        
        echo '<b>Acessando um item expecífico do array através do índice.</b><br>';
        echo 'Podemos acessar um item expecífico informando o número do seu índice: echo $listaFrutas[2];<br>';
        echo $listaFrutas[2];
        
        echo "<p><h3>Arrays Associativos</h3></p>";
        echo 'Podemos definir o índice para o array da seguinte forma: $listaFrutas2 = ["a" => "Banana", "b" => "Maçã", "x" => "Morango", "z" => "Uva", "12" => "Abacate"];<br>';
        
        $listaFrutas2 = ["a" => "Banana", 
        "b" => "Maçã", 
        "x" => "Morango", 
        "z" => "Uva", 
        "12" => "Abacate"];
        
        echo '<br>Listando o array com a função print_r($listaFrutas2) e formatando com a tag html pre: <br>';
        echo '<pre>';
        print_r($listaFrutas2);
        echo '</pre>';
        
        echo "Adicionando um novo item ao array informando um novo índice: <br>";
        echo '$listaFrutas2["w"] = "Abacaxi"; <br>';
        $listaFrutas2["w"] = "Abacaxi"; 
        echo '<pre>';
        print_r($listaFrutas2);
        echo '</pre>';
        
        echo '<br>';
        echo '<hr>';
        
        echo '<h1>2. Arrays Multidimensionais ou Bidimensionais (Arrays de Arrays)</h1>';
        
        echo '<p>São arrays que apontam para outros arrays.</p>';
        echo 'Criando um array $listaCoisas = array(); e adicionando à ele outro array: $listaCoisas["frutas"] = array("Banana", "Maçã", "Morango", "Uva"); <br>';
        
        $listaCoisas = [];
        $listaCoisas["frutas"] = array("Banana", "Maçã", "Morango", "Uva");

        echo '<br>Listando o array com a função print_r($listaCoisas) e formatando com a tag html pre: <br>';
        echo '<pre>';
        print_r($listaCoisas);
        echo '</pre><br>';
        
        echo 'Adicionando um novo array "pessoas" dentro do array listaCoisas: $listaCoisas["pessoas"] = ["1" => "João", "2" => "José", "3" => "Maria"];<br>';
        $listaCoisas['pessoas'] = ["1" => "João", "2" => "José", "3" => "Maria"];

        echo '<br>Listando o array com a função print_r($listaCoisas) e formatando com a tag html pre: <br>';
        echo '<pre>';
        print_r($listaCoisas);
        echo '</pre><br>';
        
        echo "<b>Acessando um ítem dentro dos arrays</b><br>";
        echo 'Podemos acessar o ítem "Morango", por exemplo, no array frutas da seguinte forma: echo $listaCoisas["frutas"][2]; (Mornago está no índice 2 do array)<br>';
        
        echo '<br>';
        echo $listaCoisas["frutas"][2];
        echo '<br>';
        
        echo '<br>Podemos acessar o ítem "Maria", por exemplo, no array pessoas da seguinte forma: echo $listaCoisas["pessoas"][3]; (Maria está no índice 3 do array)<br>';
        echo '<br>';
        
        echo $listaCoisas["pessoas"][3];
        echo '<br>';
        
        echo '<br>';
        echo '<hr>';
        

        // MÉTODOS DE PESQUISA DENTRO DE ARRAYS 

        echo '<h1>3. Métodos de Pesquisa dentro de Arrays</h1>';
        echo '<p>Podemos usa duas funções para pesquisa em arrays. São elas in_array() e array_search().</p>';
        echo '<p><b>in_array() -> </b>Retorna true ou false para a existência do item que está sendo procurado. Se for true retornará o valor 1, se for false retornará vazio.<br>';
        echo '<b>array_search -> </b>Retorna o índice do valor pesquisado caso ele exista. Caso não exista retornará null.</p>'; 
        
        echo 'Dado o array: <br>$frutas = ["Banana", "Maçã", "Morango", "Uva"];<br>';
        
        $frutas = ["Banana", "Maçã", "Morango", "Uva"];
        
        echo '<br>Listando o array com a função print_r($frutas) e formatando com a tag html pre: <br>';
        echo '<pre>';
        print_r($frutas);
        echo '</pre><br>';

        echo 'Realizando a consulta: in_array("Maçã", $frutas); será exibido: <br>';
        echo in_array('Maçã', $frutas);
        
        echo '<br>';

        echo '<br>Realizando a consulta: array_search("Uva", $frutas); será exibido: <br>';
        echo array_search('Uva', $frutas);

        echo '<br>';

        echo '<b><br>Para arrays multidimensionais</b> o princípio é o mesmo. Devemos informar o conteúdo buscado e o array onde a busca deverá ser feita. Por exemplo: <br>';
        echo 'echo in_array("Uva", $listaCoisas["frutas"]);<br>';
        echo 'e <br>';
        echo 'echo array_search("Uva", $listaCoisas["frutas"]);<br>'; 
        
        
        
        
        
        ?>

</body>
</html>