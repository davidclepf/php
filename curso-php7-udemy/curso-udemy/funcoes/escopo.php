<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagem() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}
// Depois de definida a função podemos chamá-la quantas vezes quisermos

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

echo "<br><hr>";

echo "<i><b>Variável em Escopo Local</b></i><br>";
//A variável de escopo local terá valor somente dentro do escopo da função
$variavel = 1;

// Essas funções não recebem nenhum parâmetro e não retornam nenhum parâmetro tb
function trocaValor() {
    $variavel = 2; // Essa variável só existe dentro da função (mesmo tendo o mesmo nome da função que está fora)
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";
// O valor da variável foi alterado somente dentro da função

echo '<br><hr>';

echo "<i><b>Variável em Escopo Global</b></i><br>";
//A variável de escopo global terá valor em todo o código e não somente dentro do escopo da função.

function trocaValorDeVerdade() {
    global $variavel; // Definindo a variável como global ela passa a acessar a variável que está fora
    $variavel = 3; // altera o valor da variável tanto dentro quanto fora da função
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());
// Retorna NULL, pois a função não está retornando nada




