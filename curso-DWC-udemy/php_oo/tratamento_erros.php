<?php

// caso haja algum erro dentro de try podemos recuperar o erro
try {
    echo '<h3> *** Try *** </h3>';

    // tentando acessar o banco de dados, como não há um banco de dados será gerado um erro
    /* $sql = 'Select * from clientes';
    mysql_query($sql); */

    // Exception é lançado propositalmente pelo programador para verificar um erro já esperado, mas que ele não quer que a aplicação quebre
    if(!file_exists('require_arquivo_a.php')) { //'file_exists() verifica se um determinado arquivo existe' 
        throw new Exception("O arquivo deveria estar disponível, mas não está");
        // também podemos lançar um Error ao invés do Exception
    }


}catch (Error $e) { // a palavra reservada 'Error' irá armazenar o erro na variável $e
    echo '<h3> *** Catch *** </h3>';
    echo $e; // imprimindo o erro capturado pelo catch

// criando um catch da Exception
} catch (Exception $e) {
    echo '<h3> *** Catch Exception *** </h3>';
    echo $e; // imprimindo o erro capturado pelo catch
 

// finally é uma instrução opcional
} finally {
    echo '<h3> *** Finally *** </h3>';

}
    
// OBS: Se o erro estivesse fora do try a aplicação iria morrer, mas com o uso do try é possível recuperar o erro e tratá-lo, caso necessário
?>