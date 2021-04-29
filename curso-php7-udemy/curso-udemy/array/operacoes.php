<div class="titulo">Operações</div>

<?php
// Concatenando Arrays 

// Para a criaçãoe de arrays podemos usar tanto parenteses, informando que se trata de um array, quanto chaves (nesse caso não é necessário informar que é um array)
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = array(
    "naturalidade" => 'Fortaleza'
);

// Em caso de duplicidade de chaves o array informado primeiro terá preferência
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // Verifica se é um array
echo '<br>' . count($dadosCompletos); // Informa a quantidade de elementos

echo '<br>';
// Obtendo um elemento de forma randômica (aleatório)
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

// echo "$dadosCompletos['idade']"; Retorna erro

echo "{$dadosCompletos['idade']}"; // usando as {} retornará os dados conforme informado
echo   '<br>';
echo "${dadosCompletos['idade']}"; // usando a { após o $ também funcionará

// Removendo elementos de um array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

// Removendo todos os dados de um array
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

// Cuidados na concatenação de arrays.
// Usando dois arrays com os mesmo índices o array informado primeiro (nesse caso $pares) irá prevalecer e não será feita a união dos 2 arrays
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

// Para que a concatenação seja feita de forma correta usamos a função array_merge()
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

// Ordenando o array
sort($decimais); // modifica o array ordenando seu conteúdo
echo '<br>';
print_r($decimais);



