<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";
/* Na atribuição por valor, são criados espaços independentes na memória, portanto a alteração de uma variável não afetará a outra */

// Atribuição por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';
echo "<br>$variavel";
echo "<br>$variavelReferencia";
/* Na atribuição por referência, as variáveis usam o mesmo espaço na memória, portanto a alteração de uma variável afetará a outra */