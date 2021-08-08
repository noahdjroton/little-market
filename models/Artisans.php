<?php
include_once('../controllers/dbconfig.php');

function submission($name, $category, $description, $tel, $ville, $user_id)
{
    global $db;
    $query = $db->prepare('INSERT INTO artisans (`name`, `category`, `description`, `tel`, `city`, `user_id`) VALUES ( :name, :category, :description, :tel, :city, :user_id );');

    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':category', $category, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':tel', $tel, PDO::PARAM_INT);
    $query->bindParam(':city', $ville, PDO::PARAM_STR);
    $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $query->execute();
}


function check($name, $category, $city)
{
    global $db;
    $query = $db->prepare('SELECT * FROM artisans WHERE name=:name && category=:category && city=:city LIMIT 1');
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':category', $category, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}

function selectByCategory($category)
{
    global $db;
    $query = $db->prepare('SELECT * FROM artisans WHERE category=:category');
    $query->bindParam(':category', $category, PDO::PARAM_STR);
    $query->execute();
    $artisans = $query->fetchAll();
    return $artisans;
}


function search($search)
{
    global $db;
    $query = $db->prepare('SELECT * FROM artisans WHERE name LIKE :search');
    $search = '%' . $search . '%';
    $query->bindParam(':search', $search, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
