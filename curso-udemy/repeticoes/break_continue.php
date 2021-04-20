<div class="titulo">Break/Continue</div>

<?php
$cont = 10;

for(;;) {
    echo "$cont <br>";
    $cont++;
    if($cont >20) {
        break; // Se não colocarmos o break a repetição continuará eternamente
    }
}

echo "<br><hr>";

for(;;) {
    $cont++;
    if($cont % 2 === 1) continue; // Se o resto da divisão do contador for estritamente igual a 1 ele continuará e não lerá esse número, não exibindo os números ímpares.
    echo "$cont <br>";
    if($cont >= 30) { 
        break; // Quando o contador for igual a 30 ele sairá do loop de repetição
    }
}

echo "<br><hr>";

foreach(array(1,2,3,4,5,6) as $valor) {
    if($valor === 5) break; // Saíra do laço quando o valor for estritamente igual a 5.
    if($valor % 2 === 0) continue; // Se o resto da divisão do contador for estritamente igual a 2 ele continuará e não lerá esse número, não exibindo os números pares.
    echo "$valor <br>";

    // Nesse caso ele não exibirá o número 5, pois quando o valor chega a ser iguala a 5 ele sai do laço de repetição
}

