<?php

if (isset($_GET['logout'])) {
    unset($_SESSION["email"]);
    session_destroy();
    header("Location: ../vues/login.php");
    exit(); 
}