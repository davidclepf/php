<div class="titulo">Operções Aritiméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1); 
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; // Em PHP o resultado será em float.
echo intdiv(7, 4), '<br>'; // Retorna apenas o número inteiro (sem o resto)
echo round(7 / 4), '<br>'; // Arredonda o resultado
echo 7 % 4, '<br>'; // Retorna o resto da divisão
// echo 7 / 0, '<br>';  // Retorna erro, pois qq numero dividido por zero é infinito
echo 4 ** 2, '<br>'; //4 elevado à 2

// Precedência de Operadores
// Segue as regras matemáticas
// () => ** => / * => + -
echo "<p>Precedência</p>";
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;


