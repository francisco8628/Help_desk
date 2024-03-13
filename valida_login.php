<?php

// Inicia uma sessão
session_start();

// variável de status de usaurio autenticado
$usuario_autenticado = false;

// usuarios do sistema
$usaurios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'teste@teste.com.br', 'senha' => '78910'),
);

foreach ($usaurios_app as $usuario) {   
    if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;        
        $usuario_autenticado = true;        
    }    
}

if($usuario_autenticado){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {   
    // redireciona para a página de login com um parametro de erro.   
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NÂO';
}

?>