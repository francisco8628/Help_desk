<?php

// Inicia uma sessão
session_start();

// variável de status de usaurio autenticado
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

// permissões de usuários
$perfis = array(1 => 'Administrador', 2 => 'Usuário');

// usuarios do sistema
$usaurios_app = array(
  
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'teste@teste.com.br', 'senha' => '1234','perfil_id' => 1),
    array('id' => 3, 'email' => 'maria@teste.com.br', 'senha' => '1234','perfil_id' => 2),
    array('id' => 4, 'email' => 'jose@teste.com.br', 'senha' => '1234','perfil_id' => 2),
);

foreach ($usaurios_app as $usuario) {   
    if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;   
        // pega o id do usuario para usar na sessão     
        $usuario_id = $usuario['id'];

        // pega o perfil do usuario para usar na sessão
        $usuario_perfil_id = $usuario['perfil_id'];
    }    
}

if($usuario_autenticado){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    // cria uma sessão para o id do usuario
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else {   
    // redireciona para a página de login com um parametro de erro.   
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NÂO';
}

?>