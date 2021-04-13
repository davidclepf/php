<div class="titulo">Constantes</div>

<?php
// Uma forma de declarar uma constante é usando a função 'define()'. 
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS; //Para constantes não se usa o $ como em variáveis.

// Outra forma é usando 'const'
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

// Não é possível atribuir um valor à uma constante através de 'const', mas é possível através da função 'define()'
$valorVariavel = 2.8;
// const NOVISSIMA_TAXA = $valorVariavel;  //Não funcionará
define('NOVISSIMA_TAXA', $valorVariavel); // Funcionará
echo '<br>' . NOVISSIMA_TAXA;

// Com const é possível definir um valor para a constante usando uma operação aritimética
const OUTRA_TAXA = 2.8 + 1.2;
echo '<br>' . OUTRA_TAXA;


// Algumas constantes reservadas do PHP
echo '<br>' . PHP_VERSION; 
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__; // Informa a linha atual
echo '<br>' . __FILE__; // Informa o caminho do arquivo 
echo '<br> Linha: ' . __DIR__; // Informa o caminho do diretório



