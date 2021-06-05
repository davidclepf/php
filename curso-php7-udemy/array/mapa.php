<div class="titulo">Mapa</div>

<?php
// Criação de array usando chaves para os valores.
// Obs: O bloco de código está quebrado em várias linhas somente para organização. Poderia ser feito em apenas uma linha.

$dados = [
    "idade" => 26,
    "cor" => "verde",
    "peso" => 49.8
];

print_r($dados);
echo '<br>';

var_dump($dados[0]); // retornará NULL, pois o índice 0 não existe.


// Para acessarmos os dados devemos usar as chaves indicadas no array.
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informação"]); // Retornará NULL pois a chave não existe.

/* 
    Misturando índices e chaves.
    É Possível misturar índices e chaves, porém não é indicado, já que pode causar confusão.
*/
$lista = array (
    "a", // receberá o índice 0
    "cinco" => "b",
    "c",
    8 => "d", // índice 8
    "e",
    6 => "f",  //índice 6
    "g",
    8 => "h" //sobrescreve o índice 8
);

echo '<br>';
print_r($lista);

// incluíndo um elemento no final do array.
$lista [] = 'i';
echo '<br>';
print_r($lista);

// adicionando um elemento em uma chave
$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);

echo '<br>';

// se tentarmos indexar chaves com valores booleanos eles serão convertidos de false e true para 0 e 1, respectivamente.
$lista[false] = 'Tentei indexar com false!';
echo '<br>';
print_r($lista); 

echo '<br>';

$lista[true] = 'Tentei indexar com true!';
echo '<br>';
print_r($lista); 




