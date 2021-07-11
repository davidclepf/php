<div class="titulo">Recursividade</div>

<?php
// Exeutando a soma de um número até 1 usando laço for
// Decrementando
function somaUmAte($numero) {
    $soma = 0;
    for(; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';

// Incrementando
function somarUmAte($numero) {
    $soma = 0;
    for($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somarUmAte(5) . '<br>';


// Soma Recursiva
function somaRecursivaUmAte($numero) {
    // Condição de Parada
    if($numero ===1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(10) . '<br>';


// Exemplo com operação ternária
function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(10) . '<br>';