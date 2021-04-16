<div class="titulo">Switch</div>
<!-- Switch não recebe true ou false, recebe um valor (que pode ser números ou strings) -->

<?php
$categoria = '';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;    
} else if($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 3300;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.'); // Formatando o preço. A função recebe a variável e é definido a qtde de casas decimais (2), o separador das casas decimais (,) e o separador de milhar (.)

echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";


// Utilizando Switch
$categoria = 'Luxo';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv';
    case 'suv básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado </p>";
