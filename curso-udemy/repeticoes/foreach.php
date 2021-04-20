<div class="titulo">Foreach</div>

<?php
// Foreach é a maneira mais prática para percorrer um array de forma padrão, do primeiro até o último passando por todos elementos.

$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'    
];

// Percorre os elementos do array
foreach ($array as $diasSemana) {
    echo "$diasSemana <br>"; 
}

// Percorre os elementos e o índice do array
foreach ($array as $indice => $diasSemana) {
    echo "$indice => $diasSemana <br>"; 
}

echo '<hr>';

// percorrendo elementos de arrays dentro de outro array
$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    foreach ($linha as $valor) {
        echo "$valor ";
    }
    echo "<br>";
}

echo "<hr>";

/*
***** Valor vs Referência *****
*/
$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $dobrar) {
    $dobrar *= 2; // número multiplicado por 2
    echo "$dobrar <br>";
}
print_r($numeros);
// Usando a atribuição por valor os números foram dobrados, mas o array não foi modificado. O conteúdo é o mesmo.

echo '<br> <br>';

foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
// Usando a atribuição por referência os números foram dobrados e o array foi modificado. O conteúdo assumiu os valores dobrados.



