<?php
    session_start();
    require_once('./config/conexao.php');

    $upload_dir = "uploads";
    if(isset($_FILES['file']['tmp_name'])) {
        $tmp = $_FILES['file']['tmp_name'];
        $name = uniqid()."".$_FILES['file']['name'];
        
        move_uploaded_file( $tmp, "$upload_dir/$name");

        $id = $_SESSION['usuario_id'];
        $sql = "UPDATE usuarios SET avatar = '$name' WHERE id = '$id'";
        
        $pdo->query($sql);
        
        $_SESSION['avatar'] = $name;

        header('location: index.php');
    }