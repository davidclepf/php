<div class="titulo">Operador Ternário</div>

<?php
$idade = 60;
$status;

if($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}
echo "$status <br>";

// O operador ternário pode substituir o código if else
$idade = 17;

// Se a expressão for verdadeira a primeira parte será atribuida para $status, caso seja falsa a segunda parte é atribuida
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';
echo $status;
