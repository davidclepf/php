<div class="titulo">Retornando Função</div>

<?php
function soma($a) {
    return function($b) use ($a) {
        return $a + $b; // Se não usarmos o 'use ($a)' um erro será gerado pois o 'return' da função anônima não acessa o parâmetro da função soma
    };
}

echo soma(13)(5);

// Armazenando uma função dentro de uma variável para que possamos chamá-la várias vezes depois
$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);
echo '<br>', $doisMais(280);
// Com a função carregada dentro da variável, podemos chamá-la quantas vezes for necessário e de carrgá-la mais rápido.