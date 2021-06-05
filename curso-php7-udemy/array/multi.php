<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>';

// Acessando os dados do array
echo '<br>' . $dados[0]['idade']; // Acessa os dados do índice 'idade' no array 0 (primeiro array)
echo '<br>' . $dados[1]['idade']; // Acessa os dados do índice 'idade' no array 1 (segundo array)

echo '<br>';

// Adicionando mais um array
$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

// Adicionando novos dados ao array interno
$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);
echo '<br>';

/* 
    Removendo um array.
    obs: o PHP não reorganiza os array (removendo o array [1] ficaremos com os arrays [0] e [2])
*/
unset($dados[1]);
echo '<br>';
print_r($dados);
