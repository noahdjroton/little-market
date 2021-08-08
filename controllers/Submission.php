<?php
session_start();

include_once('../models/Artisans.php');

if (isset($_POST['submission']) && $_POST['name'] != "" && $_POST['tel'] != "" && $_POST['city'] != "" && $_POST['category'] != "" && $_POST['description'] != "") {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $tel = $_POST['tel'];
    $city = $_POST['city'];
    $user_id = $_SESSION['id'];

    $result = check($name, $category, $city);

    if (!$result) {
        submission($name, $category, $description, $tel, $city, $user_id);
        $success = "Votre établissement a été ajouté avec succès.";
    } else {
        $error = "Cet établissement est déjà enregistré.";
    }
} else {

    $error = "Veuillez vérifier que tous les champs sont remplis.";
}
