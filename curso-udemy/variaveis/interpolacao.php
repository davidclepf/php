<div class="titulo">Interpolação</div>

<?php
// Interpolação é o nome dado para a interpretação de variáveis dentro de strings

$numero = 10;
echo $numero;
echo '<br> $numero'; //com aspas simples não será feita a interpolação (interpretar a variável)
echo "<br> $numero"; // somente com aspas duplas a interpolação será feita

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos"; // nesse caso a variável não será reconhecida e será ignorada.
echo "<br> Eu tenho 5 {$objeto}s"; // desse modo podemos colocar no plural
echo "<br>Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s";  // o espaço antes da variável acaba gerando um problema, já o espaço depois é resolvido normalmente