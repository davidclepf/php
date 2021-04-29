<div class="titulo">Laço For</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
/* O primeiro parâmetro define a variável: A variável cont recebe o valor 1 ($cont = 1). 
O segundo parâmentro define a condição do laço: Enquanto a variável for menor ou = a 5 ($cont <= 5) o laço será repetido.
O terceiro parâmetro define qual será a ação a ser repetida: Será incrementeado 1 à variàvel ($cont++) até que ela seja maior que 5, quando isso ocorrer o programa sai do laço.
*/

echo "<hr>";

// Não é obrigatório que sejam informados os 3 parâmetros para o laço funcionar.
for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}
// Nesse caso a variável cont assumirá o valor do laço anterior que é igual à 6 (no momento que a variável atingiu o valor 6 o programa saiu do laço, pois o parâmetro era para incrementar até que a variável fosse <= 5).

echo "<hr>";

// Passando apenas um parâmetro
for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++; // O incremento foi passado dentro do bloco de códigos.
}
// Se rodarmos apenas com o parâmetro informado, o laço será infinito, por isso o incremento foi informado dentro do bloco de código. Não é comum esse tipo de abordagem, visto que dentro do laço já há um parâmetro com essa função.

echo "<hr>";

// Laço de repetição com array
$array = [1 => 'Domingo', 'Segunda', 'Terça', "Quarta", 'Quinta', 'Sexta', 'Sábado'];

print_r($array);
echo '<br>';
echo '<br>';
for($i = 1; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
} 

echo "<hr>";

// Percorrendo uma matriz. Um laço for dentro do outro.
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
// O primeiro for vai percorrer os dois arrays de fora e o segundo for vai percorrer cada um dos elementos dos arrays.
for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}
// A variável $i selecionará os arrays e a variável $j ira selecionar os elementos dentro dos arrays.



