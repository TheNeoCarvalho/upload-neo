<?php
    session_start();
    if(isset($_SESSION['isLogged'])){
        header('location: pages/home.php');
    }else {
        header('location: login.php');
    }
?>