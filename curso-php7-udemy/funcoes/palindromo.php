<div class="titulo">Desafio Palindromo</div>

<!-- 
    Desafio:
    Receber uma palavra e verificar se ela é palindromo (Uma palavra que se escreve exatamente do mesmo jeito tanto da esquerda pra direita quanto o contrário. Ex: Ana, arara...)
 -->
<?php
echo "<i><b>Resolução 1 - Usando laço for</b></i><br>";
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('ana') . ' ';
echo palindromo('maria') . ' ';
echo palindromo('arara') . ' ';
echo palindromo('bola') . ' ';
echo palindromo('abccba') . ' ';

echo '<br>';

echo "<i><b>Resolução 2 - Usando a função strrev()</b></i><br>";
// A função strrev() inverte os caracteres de uma string
function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('maria') . ' ';
echo palindromoSimples('arara') . ' ';
echo palindromoSimples('bola') . ' ';
echo palindromoSimples('abccba') . ' ';

