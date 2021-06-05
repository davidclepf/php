<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Curso PHP</title>
</head>
<body>
    <h1>Switch</h1>
    <p><b>$opcao = 2</b> &nbsp;&nbsp;&nbsp; #definimos aqui um valor para a variável opcao.</p>
    <p><b>switch($opcao) {</b> &nbsp;&nbsp;&nbsp; # a função switch receberá o valor da variável opcao. <br>
    &nbsp;&nbsp; <b>case 1:</b>&nbsp;&nbsp;&nbsp; #caso o valor da variável seja 1 o código abaixo será executado <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>trecho do código à ser executado</b> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>break;</b> #caso o código seja executado break indicará ao switch que chegou ao final.<br>
    &nbsp;&nbsp; <b>case 2:</b>&nbsp;&nbsp;&nbsp; #caso o valor da variável seja 2 o código abaixo será executado <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>trecho do código à ser executado</b> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>break;</b> #caso o código seja executado break indicará ao switch que chegou ao final.<br>
    &nbsp;&nbsp; <b>default:</b>&nbsp;&nbsp;&nbsp; #caso nenhum dos códigos acima tenham sido executados o trecho de código abaixo será <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>trecho do código à ser executado</b> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>break;</b> #break indicará ao switch que chegou ao final.<br>
    <b>}</b>&nbsp;&nbsp;&nbsp; # indica o fim do switch </p>

    <hr>

    <?php
        echo "<h3>Exemplo</h3>";

        echo '$parametro = 2;<br>';
        echo 'switch($parametro) {<br>';
        echo '&nbsp;&nbsp;  case 1:<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;  echo "Entrou no case 1";<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp; break;<br>';
        
        echo '<br>';
        
        echo '&nbsp;&nbsp;  case 2:<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;  echo "Entrou no case 2";<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp; break;<br>';
        echo '<br>';

        echo '&nbsp;&nbsp;  case 3:<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;  echo "Entrou no case 3";<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp; break;<br>';
        echo '<br>';

        echo '&nbsp;&nbsp;  default:<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;  #obs: o default não é obrigatório. Pode ser deixado em branco.<br>';
        echo '&nbsp;&nbsp;&nbsp;&nbsp; break;<br>';
        echo '}<br>';
        echo '<br>';
        
        echo '<b>Saída do switch<br></b>';
        $parametro = 2;
        switch($parametro) {
            case 1:
                echo "Entrou no case 1";
                break;
            case 2:
                echo "Entrou no case 2";
                break;
            case 3:
                echo "Entrou no case 3";
                break;
            default:
                #code...
                break;
        }
        echo '<br>';
        echo gettype(true);    

        

    ?>


</body>
</html>