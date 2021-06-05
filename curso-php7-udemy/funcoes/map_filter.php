<div class="titulo">Map & Filter</div>

<?php
/*  
*** Map transforma um array em outro array ***
*/

// **** Arredondando notas ****
// Usando foreach
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);
echo '<br>';

// Usando Map
$notasFinais2 = array_map('round', $notas); // Usando round sem '' não está funcionando
print_r ($notasFinais2);



/* 
*** Filter filtra os elementos de um array e exibe um array com os elementos filtrados ***
*/
// Usando foreach

$apenasOsAprovados1 = [];

foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}

echo '<br>';
print_r($apenasOsAprovados1);

// Usando Filter
function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$apenasOsAprovados2 = array_filter($notas, 'aprovados');
print_r($apenasOsAprovados2);

// Arredondando as notas e somando mais 1 ponto
function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);