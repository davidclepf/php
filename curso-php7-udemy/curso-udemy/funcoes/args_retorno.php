<div class="titulo">Argumentos & Retornos</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

//Função não recebe nenhum parâmetro, mas retorna uma string
obterMensagem(); //Não retornará nada. Para imprimir na tela é necessário o uso de echo. A função está apenas retornando uma string e não imprimindo na tela.
$mensagem = obterMensagem(); //Associando a função à uma variável.
echo $mensagem; //Agora sim a mensagem será impressa na tela
echo '<br>' . obterMensagem(); //imprimirá na tela
echo '<br>';
var_dump(obterMensagem()); //A função está retornando uma string.

//Função recebe um parâmetro e retorna uma string
function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

echo '<br>' . obterMensagemComNome('João');
echo '<br>' . obterMensagemComNome('Maria');

echo '<br><br><hr>';

echo "Função soma <br>";
function soma($a, $b) {
    return $a + $b;
}

echo soma(4, 5);
echo '<br>', soma(41, 59);
// Usando variáveis como referência.
$x = 6;
$y = 12;
echo '<br>', soma($x, $y);

echo '<br><br><hr>';

echo 'Troca Valor - Atribuição Valor / Referência';

//Atribuição Valor
function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>' . $variavel;
// O valor não será alterado.

echo '<br>';


//Atribuição Referência
function trocaValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 500);
echo $variavel; 
// O valor foi alterado de 1 para 500.





