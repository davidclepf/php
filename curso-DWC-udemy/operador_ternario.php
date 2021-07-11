<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>

    <?php
        echo '<h1>Operadores Ternários</h1>';
        echo "A sintaxe básica dos operadores ternários é: <br> <b>condição ? true : false</b>";
        echo '<br>condição à ser verificada <b>?</b> a instrução à ser executada caso a condição seja verdadeira <b>:</b> a instrução à ser executada caso a condição sejo falsa';

        // CASO 1
        // Um ecomerce que oferecerá frete gratuito caso o cliente tenha o cartão da loja e o valor da compra seja superior a R$100

        $cartaoLoja = true;
        $valorCompra = 300;
        
        $valorFrete = 50;
        $recebeuDesconto = false;

        if($cartaoLoja && $valorCompra >= 100) {
            $valorFrete = 0;
            $recebeuDesconto = true;
        }
    ?>

    <h1> Detalhes do Pedido</h1>

    <!-- Usando operadores ternários -->
    <p>Possui o cartão da loja? <?= $cartaoLoja ? 'SIM' : 'NÃO' ?> </p>

    <!-- Exemplo usando if/else -->
    <?php
      /*   if($cartaoLoja) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        } */
    ?> 
    
    
    <p>Valor da Compra: R$ <?= $valorCompra ?></p>

    <p>Recebreu desconto no frete? 
    <?php
        // Usando operador ternário atribuindo a saída à uma variável
        $frete = $recebeuDesconto ? 'SIM' : 'NÃO';
        echo $frete;

        // Exemplo usando if/else
        /* if($recebeuDesconto) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        } */
    ?>
    </p>

    <p>Valor do frete: R$ <?= $valorFrete ?></p>

    
    
</body>
</html>