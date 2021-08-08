<?php 
session_start();
include_once('../models/Users.php');

if (isset($_POST['registration']) && $_POST['lastname'] != "" && $_POST['firstname'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['password'] === $_POST['confirm_password'] ) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = login($email, $password);
  
    if (!$result) {
        registration($lastname, $firstname ,$email, $password);
        
        $_SESSION['id'] = $result['id'];
        $_SESSION['email'] = $result['email'];
        header("Location: ../vues/artisan_submission.php");
    } else {
        $error = "Ces indentifiants correspondent déjà à un autre compte.";
        
    }
}
else{
    $error = "Veuillez vérifier que tous les champs sont remplis et que les deux mots de passe sont identiques";
}
