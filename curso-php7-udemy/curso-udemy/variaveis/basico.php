<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3; // para a criação de variáveis usamos o '$'
$b = 16;
$soma = $a + $b;
echo $soma, '<br>';

echo isset($soma); // verifica se a variável está setada. retornará 1 para true.
echo '<br>';

unset($soma); //limpa o valor da variável
echo isset($soma); //não retornará nada (false) pois a variável não está mais setada
echo '<br>';
var_dump($soma); //retornará null, pois a variável não está setada


$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!"; // em PHP é possível alterar a variável para tipos diferentes.
echo '<br>' . $variavel;

// Nomes de variáveis
$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida';
$vâr5 = 'válida'; //apesar de válido não é aconselhável

// $6var = 'inválida';
// $%var7 = 'inválida';
// $var8% = 'inválida';

// Variáveis pré definidas
// São varáveis já disponíveis no PHP
echo '<br>';
var_dump($_SERVER);
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);







