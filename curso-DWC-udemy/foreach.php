<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>
    
    <?php
        echo '<h1>Foreach</h1>';
        
        echo '<p>O comando de repetição foreach é um comando especializado para uso em arrays e objetos.</p>';
        echo 'O comando foreach não necessita de um comando de parada, ele percorre todo o array e quando chega no final ele sai do laço de repetição.<br>';

        echo '<br>';

        echo '<b>Sintaxe:</b><br>';
        echo 'foreach(array as variável) {<br>';
        echo 'bloco de código;<br>';
        echo '}<br>';

        echo '<br>Entre parênteses indicamos o array que o comando deve percorrer e uma variável onde as informações serão guardadas. <br>';

        // Criando um array
        $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

        echo '<pre>';
        print_r($itens);       
        echo '</pre><br>';

        echo '<br>';

        foreach($itens as $item) {
            echo "$item <br>";
        }
        
        echo '<br>Outro exemplo:<br>';
        
        foreach($itens as $item) {
            echo "$item";

            if($item == 'mesa') {
                echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras!)';
            }
            echo '<br>';
        }
        

    ?>
</body>
</html>