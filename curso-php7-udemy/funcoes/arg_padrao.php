<div class="titulo">Argumento Padrão</div>
<!-- 
    O Argumento Padrão é um valor que, quando não for informado um parâmetro de entrada, esse valor é usado.
 -->
<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao(); // Nenhum dos dois parâmetros foi informado, logo os dois valores padrão serão usados
echo saudacao(null); // O primeiro valor receberá null e o segundo receberá o valor padrão
echo saudacao(NULL, null); // Como foram informados dois valores null os dois parâmetros receberão null
echo saudacao('João', 'da Silva'); // A função receberá os dois parâmetros informados

echo '<br>';

// Passando somente um valor padrão
function anotarPedido($comida, $bebida = 'Água') { // Caso o segundo parâmetro não seja informado, será setado o valor padrão para bebida.
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburger'); // O primeiro parâmetro receberá o valor informado (Hamburger) e o segundo receberá o valor padrão (Água).
anotarPedido('Pizza', 'Refrigerante'); // Como os dois parâmetros foram informados o Argumento Padrão não será carregado

echo '<br>';

// Usar somente o primeiro parâmetro como padrão não fará sentido, pois, como o segundo parâmetro é obrigatório, será necessário informar os dois parâmetros
function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

 //anotarPedido2('Hamburger'); // Como só foi informado um valor ele será atribuido ao primeiro parâmetro, que é o padrão, e como não foi informado um valor para o segundo parâmetro (que é obrigatório) será gerado um erro.

anotarPedido2('Refrigerante', 'Pizza'); // Para que a função sejá executada é necessário informar os dois parâmetros. Nesse caso o parâmetro padrão é inútil.