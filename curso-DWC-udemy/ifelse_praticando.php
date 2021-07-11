<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Curso PHP</title>
</head>
<body>
    
    <?php

        // CASO 1
        // Um ecommerce que oferecerá frete gratuito caso o cliente tenha o cartão da loja e o valor da compra seja superior a R$100

        $cartaoLoja = false;
        $valorCompra = 300;
        
        $valorFrete = 50;
        $recebeuDesconto = false;

        if($cartaoLoja && $valorCompra >= 100) {
            $valorFrete = 0;
            $recebeuDesconto = true;
        }
    ?>

    <h1> Detalhes do Pedido</h1>

    <p>Possui o cartão da loja? 
    <?php
        if($cartaoLoja) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
    ?>
    </p>
    
    <p>Valor da Compra: R$ <?= $valorCompra ?></p>

    <p>Recebeu desconto no frete? 
    <?php
        if($recebeuDesconto) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
    ?>
    </p>

    <p>Valor do frete: R$ <?= $valorFrete ?></p>
 
    <?php
        // CASO 2
        /*
            1) Oferecerá frete gratuito caso o cliente tenha o cartão da loja e o valor da compra seja igual ou superior a R$400.
            2) Oferecerá frete no valor de R$ 10 caso o cliente tenha o cartão da loja e o valor da compra seja igual ou superior a R$300.
            3) Oferecerá frete no valor de R$ 25 caso o cliente tenha o cartão da loja e o valor da compra seja igual ou superior a R$100.
            4) Para compras abaixo de R$ 100 o valor do frete será de R$ 50.
         */

        $cartaoLoja = true;
        $valorCompra = 80;
        $valorFrete = 50;
        $recebeuDesconto = true;

        if($cartaoLoja && $valorCompra >= 400) {
            $valorFrete = 0;
        } elseif($cartaoLoja && $valorCompra >= 300) {
            $valorFrete = 10;
        } elseif($cartaoLoja && $valorCompra >= 100) {
            $valorFrete = 25;
        } else {
            $recebeuDesconto = false;          
        }
        ?>

        <h1> Detalhes do Pedido 2</h1>

        <p>Possui o cartão da loja? 
        <?php
            if($cartaoLoja) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
        </p>
        
        <p>Valor da Compra: R$ <?= $valorCompra ?></p>
    
        <p>Recebreu desconto no frete? 
        <?php
            if($recebeuDesconto) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
        ?>
        </p>
    
        <p>Valor do frete: R$ <?= $valorFrete ?></p>
       

</body>
</html>