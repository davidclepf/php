<div class="titulo">Desafio Meses</div>

<?php
// Indexar o array meses para que cada mês seja referênciado pelo seu respectivo número (ex: 12 - Dezembro)

$meses = array (
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);

print_r($meses);
echo '<br>' . $meses[5]; // Será retornado Junho e não Maio.
echo '<br>' . $meses[12]; // Retornará NULL

echo '<br>';

// Resposta
$meses = array(
    1 => 'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);
print_r($meses);
echo "<br> O mês 5 é: $meses[5]"; // Ok
echo "<br> O mês 12 é: $meses[12]"; // OK
