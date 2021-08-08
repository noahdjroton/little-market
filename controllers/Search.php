<?php
session_start();

include_once('../models/Artisans.php');


if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];

    $results = search($search);
    
    if ($results) {

        $_SESSION['results'] = $results;
        header("Location: ../vues/search_results.php");
    }
}