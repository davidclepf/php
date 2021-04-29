<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--; // diminui 1 da váriável, independente do tipo
--$numero; // pode ser usada antes da variável
echo '<br>' . $numero;

$numero ++; // acrescenta 1 à váriável, independente do tipo
++$numero; // pode ser usada antes da variável
echo '<br>' . $numero;

$numero = 20;
echo '<br>' . $numero;

$numero -= 5; // A variável recebe o valor dela própria - 5 (é o mesmo q $numero = $numero - 5)
echo '<br>' . $numero;

$numero += 5; // A variável recebe o valor dela própria + 5 (é o mesmo q $numero = $numero + 5)
echo '<br>' . $numero;
$numero *= 10; // A variável recebe o valor dela própria * 10 (é o mesmo q $numero = $numero * 10)
echo '<br>' . $numero;

$numero /= 2; // Segue a msm lógica
echo '<br>' . $numero;
$numero %= 6; // Segue a msm lógica
echo '<br>' . $numero;
$numero **= 2; // Segue a msm lógica
echo '<br>' . $numero;

$numero .= 4; // Apenas concatenação
echo '<br>' . $numero;

// Concatenação
$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .=  ' de verdade!';
echo '<br>' . $texto;

// Setando um valor padrão para variáveis inexistentes
//$variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; // Se a variável existir será usado o valor atribuído à ela,  caso contrário será exibido o valor definido como default.
echo '<br>' . $valor;




