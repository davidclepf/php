<?php
    session_start(); 

    // Para encerrar a sessão podemos usar 'unset()' para remover índices do array de sessão ou podemos usar 'session_destroy()' para destruir a variável de sessão.

    session_destroy();
    header("Location: index.php");


?>