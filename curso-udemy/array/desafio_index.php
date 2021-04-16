<div class="titulo">Desafio Index</div>

<?php
// Como será impresso o array abaixo?
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

// Minha resposta:
// Array( [0] => 8, [3] => 3, [4] => 2, ['a'] => 4, [5] => 5, ['9'] => 6, ['06'] => 7  )

print_r($lista);

// O que foi impresso:
// Array ( [0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 [06] => 7 )