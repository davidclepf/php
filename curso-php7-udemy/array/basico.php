<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");

echo $lista . '<br>'; // Não conseguimos imprimir os dados de um array usando somente echo.

var_dump($lista); // Uma forma de acessarmos os dados de um array é usando var_dump.

echo "<br>";
echo "<br>";

print_r($lista); // outra forma, e mais recomendada, de acessar os dados de um array é usando print_r.

echo '<br>';


// Alterando o valor de um array
$lista[0] = 1234; // O índice 0 será alterado.
print_r($lista); 

// Acessando os dados de um array através do índice
echo '<br>' . $lista[0]; // Retorna o conteúdo do índice 0.
echo '<br>' . $lista[1]; // Retorna o conteúdo do índice 1.
echo '<br>' . $lista[2]; // Retorna o conteúdo do índice 2.
echo '<br>' . $lista[3]; // Retorna o conteúdo do índice 3.
echo '<br>' . $lista[4]; // Informando um índice inexiste será retornado null (nesse caso não será exibido nada na tela)
echo var_dump($lista[4]); // Usando var_dump podemos ver que é retornado o valor NULL.

echo '<br>';

$texto = "Esse é um texto de teste";
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // Por padrão os acentos serão contados como um caractere. 
echo '<br>' . mb_substr($texto, 10, 1); // Usando mb_substr os acentos não são contados. Os parâmetros são: o array ($texto), o índice a ser exibido (10) e a quantidade de caracteres a ser exibido (nesse caso só 1, o próprio 10).
