<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=anime", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
    echo "Erro:" . $e->getMessage();
}

