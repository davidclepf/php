<div class="titulo">Desafio PI</div>

<?php
// Criar um código que defina um nível de precisão para que 2 números PI sejam considerados iguais ou não.

echo "PI definido pelo sistema = " . pi();
$pi = 3.14; // PI definido pelo usuário
echo "<br> PI definido pelo usuário = $pi"; 

if($pi === pi()) {
    echo "<br> Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Resposta
echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - $piErrado);

if($pi - pi() <= 0.01) {
    echo "<br>Praticamente iguais!";
}

if($pi - $piErrado <= 0.01) {
    echo "<br> Praticamente iguais!";
} else {
    echo "<br>Valor errado!";
}


