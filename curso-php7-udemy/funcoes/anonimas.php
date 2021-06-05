<div class="titulo">Funções Anônimas</div>

<?php
// Variável recebe uma função anônima
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(5, 6) . '<br>';



// Usando uma função dentro de outra.
function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, '+', $soma);
// Passada a função soma como parâmetro


$multiplicacao = function($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao);
// A lógica da execução não está detro da função 'executar', ela apenas recebe os parâmetros, a lógica de execução está na função que será passada

function divisao($a, $b) {
    return $a / $b;
}

executar(9, 3, '/', 'divisao');

// Para que as funções sejam interpretadas corretamente é necessário usar áspas simples, caso contrário não funcionará 