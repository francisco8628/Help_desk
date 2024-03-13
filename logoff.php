<?php 
session_start();
//  Não bastava apenas destruir a sessão.
session_destroy();
// É necessário redirecionar o usuário para a página de login.
header('Location: index.php');
?>