<div class="titulo">Usando Tipos</div>

<?php
function somar($a, $b) {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar(1, 2) . '<br>';
echo somar(1.7, 2.5) . '<br>';
echo somar(1, '4dois') . '<br>'; // Somando um int com uma string será levado em conta o número 4 (como int) e o restante da string será descartado

echo '<br>';

// Convertendo os parâmetros de entrada para int
function somar2(int $a, int $b) {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
// echo somar2(1, '4dois') . '<br>'; // Os números inteiros serão tratados normalmente. Os floats serão convertidos e as casas decimais serão descartadas. No caso da string retornará um erro

echo '<br>';

// Convertendo o retorno da função para int
function somar3($a, $b): int {
    echo "Somando $a + $b = ";
    return $a + $b;
}
// A conversão será feita somente após a soma
echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>'; // Os números inteiros serão tratados normalmente. Os floats serão somados como floats e convertidos depois descartando as casas decimais. No caso da string será feita a soma do int com o 4 que é o primeiro caractere da string e o resultado será convertido para int.