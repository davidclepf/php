<div class="tiulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
echo "<br>";
var_dump(1 > 1);
echo "<br>";
var_dump(1 >= 1);
echo "<br>";
var_dump(4 < 23);
echo "<br>";
var_dump(1 <= 7);
echo "<br>";
var_dump(1 != 1); // Diferente
echo "<br>";
var_dump(1 <> 1); // Diferente
echo "<br>";

var_dump(111 == '111'); // Comparação
var_dump(111 === '111'); // Comparação estrita 
var_dump(111 != '111'); // Comparação
var_dump(111 !== '111'); // Comparação estrita 
// Na comparação não será feito distinção quanto ao tipo dos dados, somente do conteúdo.
// Na comparação estrita será feita a distinção e só será true se os dados forem idênticos

echo "<p>Relacionais no If/Else </p><hr>";
$idade = 66;
if($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} else if($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo '<p>Spaceship</p><hr>';
//Spaceship é usado para ordenação de números

var_dump(5 <=> 3); // Qdo o primeiro operando é maior retornará 1
var_dump(50 <=> 50); // Qdo os operandos são iguais retornará 0
var_dump(5 <=> 50); // Qdo o segundo operando é maior retornará -1

echo '<p>Valores podem ser V ou F</p><hr>';
// Usando dupla negação (!!) retornará se o valor é V ou F
var_dump(!!5); // True
var_dump(!!0); // False
var_dump(!!""); // False
var_dump(!!" "); // True

?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>