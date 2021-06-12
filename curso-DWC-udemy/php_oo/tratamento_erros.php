<?php

// caso haja algum erro dentro de try podemos recuperar o erro
try {
    echo '<h3> *** Try *** </h3>';

    // tentando acessar o banco de dados, como não há um banco de dados será gerado um erro
    $sql = 'Select * from clientes';
    mysql_query($sql);
}catch (Error $e) {
    echo '<h3> *** Catch *** </h3>';
    echo $e;

// finally é uma instrução opcional
} finally {
    echo '<h3> *** Finally *** </h3>';

}
    

?>