<?php
include_once('../controllers/dbconfig.php');




function login($email, $password)
{
    global $db;
    $hashed_password = sha1($password);
    $query = $db->prepare('SELECT * FROM users WHERE email=:email && password=:password LIMIT 1');
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}

function logout($id)
{
   
}

function registration($lastname, $firstname ,$email, $password)
{
    global $db;
    $hashed_password = sha1($password);
    $query = $db->prepare('INSERT INTO users (`lastname`, `firstname`, `email`, `password`) VALUES ( :lastname, :firstname, :email, :password );');

    $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $query->execute();
}
