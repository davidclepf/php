<div class="titulo">Desafio Recursividade</div>

<?php
/* 
 Fazer um bloco de códigos que percorra o array abaixo e retorne seu conteudo organizado de forma recursiva. Os numeros do array mais externo devem retornar com '>', os mais internos com '>>', e assim por diante.

 $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10]
 
 */

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if(is_array($elemento)) {
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
