<?php

session_start(); // iniciando a sessão

// Usuários do sisitema
$usuarios_app = [
    ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
    ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
    ['id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
    ['id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2]
];

$usuario_autenticado = false;
$usuario_id = null; // receberá o id do usuário
$usuario_perfil_id = null; // receberá o perfil do usuário ('Administrativo' ou 'Usuário')

// array para perfil de usuário
$perfis = [1 => 'Administrativo', 2 => "Usuário"];

// foreach percorrerá todos os elementos do array e retornará cada elemento de seu conteúdo na variável $user, nesse caso o conteúdo será os arrays internos
foreach($usuarios_app as $user) {
    if($user['email'] == $_POST['email']  && $user['senha'] == $_POST['senha']) { // verifica se o conteúdo dos arrays é igual ao conteúdo passado no formulário
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];

    }    
}

if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro'); // header redireciona para a location informada
}