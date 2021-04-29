<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}
// Se na primeira vez que o laço while rodar a expressão for falsa ele não executará nada.

echo '<br>';

$contador = 0;
do {
    echo "do-while $contador <br>";
    $contador++;    
} while($contador < VALOR_LIMITE);
// No caso do do while o bloco de repetição irá rodar pelo menos uma vez, mesmo se a expressão for falsa.
// É a única extrutura que a expressão vem depois do bloco e que tem ponto e vírgula no final.

echo '<br>';
// Podemos criar um laço infinito usando while(true). Se quisermos que o programa saia do laço devemos usar o break.
$contador = 0;
while(true) {
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break; //Se não usarmos break o laço será infinito
}
