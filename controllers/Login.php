<?php 
session_start();
include_once('../models/Users.php');

if (isset($_POST['login']) && $_POST['email'] != "" && $_POST['password'] != "") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = login($email, $password);
    
    if ($result) {
        
        $_SESSION['id'] = $result['id'];
        $_SESSION['email'] = $result['email'];
        header("Location: ../vues/artisan_submission.php");
    } else {
        $error = "Identifiants erronnés ! Veuillez vérifier si l'email et le mot de passe sont corrects";
        
    }
}
