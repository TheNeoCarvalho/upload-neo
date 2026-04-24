<?php
session_start();

require_once('../config/conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '". $email."'";
    
    $usuario = $pdo->query($sql)->fetch();

    if(!empty(password_verify($senha, $usuario['senha']))){
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['avatar'] = $usuario['avatar'];
        $_SESSION['isLogged'] = true;
        header('location: ../pages/home.php');
    }else{
        echo "Erro: Usuário/Senha incorretos";
    }
