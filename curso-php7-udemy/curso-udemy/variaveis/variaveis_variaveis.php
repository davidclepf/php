<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} $valorA";
// é como se no caso de $$a, o php convertesse o $a (oq daria 'valorA') e depois colocasse o $ antes, trandormando em outra variável ($valorA). $$a == $valorA


echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!';
echo "$epa {$$epa} {$$$epa}";

echo '<br>';
$nome = 'Maria';
$Maria = 'João';
echo "{$$nome}";
// em $$nome: é exibido o valor de $nome que é 'Maria' e como tem mais um $ antes da variável o resultado é '$Maria'. O conteúdo da variável $Maria é João.