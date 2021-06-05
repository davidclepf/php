<div class="titulo">Desafio Equação</div>

<?php
echo '<h3>Resolução 1</h3>';
$numerador1 = ((6 * (3 + 2))**2) / (3 * 2);
echo "Numerador 1 => ((6 * (3 + 2))**2) / (3 * 2) <br>";
echo "O resultado do Numerador 1 é = " .$numerador1;
echo '<br>';

$numerador2 = (((1 - 5) * (2 - 7)) / 2) ** 2;
echo '<br> Numerador 2 => (((1 - 5) * (2 - 7)) / 2) ** 2';
echo '<br> O resultado do Numerador 2 é = ' . $numerador2;
echo '<br>';

echo '<br >Resultado => ((Numerador 1 - Numerador 2) ** 3) / (10 ** 3)';
$resultado = (($numerador1 - $numerador2) ** 3) / (10 ** 3);
echo '<br> O resultado da equação é = ' . $resultado;




echo '<br>';
echo '<h3>Resolução 2</h3>';
echo 'Bloco A = ((6 * (3 + 2)) ** 2) / (3 * 2)';
$bloco_a_pt1 = ((6 * (3 + 2)) ** 2);
$bloco_a = $bloco_a_pt1 / (3 * 2);
echo '<br> O resultado do Bloco A é = ' . $bloco_a; 
echo'<br>';

echo '<br> Bloco B = (((1 - 5) * (2 - 7)) / 2) ** 2';
$bloco_b_pt1 = ((1 - 5) * (2 - 7)) / 2;
$bloco_b = $bloco_b_pt1 ** 2;
echo '<br> O resultado do Bloco B é = ' . $bloco_b; 
echo '<br>';

echo '<br>' . 'Bloco C = ((Bloco A - Bloco B) ** 3) / (10 ** 3)';
$bloco_c = (($bloco_a - $bloco_b) ** 3) / (10 ** 3);
echo '<br> O resultado do Bloco C é = ' . $bloco_c; 
echo '<br>';

echo '<br>' . '**** O RESULTADO DA EQUAÇÃO É  IGUAL A ' . $bloco_c . ' ****';



echo '<br>';
echo '<h3>Resolução Curso</h3>';
$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado final é " . $final . ".";





