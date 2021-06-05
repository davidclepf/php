<?php

    // acessando o script 'valida_login.php' que está em uma pasta fora da pasta pública.
    require "../app_help_desk/valida_login.php";

    // Por motivo de segurança o script valida_login e o arquivo.hd são colocados em uma pasta separada, para caso alguém acesse a pasta pública, não tenha acesso à esses documentos
?>