<?php

session_start();

require_once('../config/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($nome) && !empty($email) && !empty($senha)) {

    $existeUsuarioComEmail = "SELECT email FROM usuarios WHERE email = '" . $email . "'";
    $existe = $pdo->query($existeUsuarioComEmail)->fetch();

    if ($existe) {
        echo "O email informado jé está cadastrado!";
    } else {

        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhaCriptografada')";
        $pdo->exec($sql);

        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['isLogged'] = true;
        header('location: ../pages/home.php');
    }
} else {
    echo "Os campos Nome, Email e Senha são obrigatórios";
}
