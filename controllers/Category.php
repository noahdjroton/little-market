<?php
session_start();

include_once('../models/Artisans.php');



$artisans = selectByCategory($_GET['category']);


if ($artisans) {

    $artisans;
}