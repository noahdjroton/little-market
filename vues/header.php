<?php
session_start();
if (isset($_SESSION["id"])) {
}

include_once('../controllers/Search.php');
include_once('../controllers/Logout.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Little Market</title>
    <link rel="stylesheet" href="../assets/style/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="home.php">Little Market</a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="home.php">Accueil</a></li>

            <?php

            if (isset($_SESSION["id"])) {
            ?>
                <li><a href="artisan_submission.php">Soumettre un artisan</a></li>

                <li>

                    <form method="GET">

                    
                        <button style=" background-color:transparent; border:none; " name="logout"> 

                        <a>Déconnexion</a>
                        </button>
            
                    </form>

                </li>

            <?php
            } else {
            ?>
                <li><a href="login.php">Connexion</a></li>
            <?php
            }
            ?>
            <li>
                <form class="search" action="../controllers/Search.php" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Rechercher" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </li>

        </ul>
    </nav>