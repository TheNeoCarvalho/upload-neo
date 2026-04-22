<?php
session_start();

require_once('../partials/header.php');

if (!isset($_SESSION['isLogged'])) {
    header('location: ../login.php');
}
