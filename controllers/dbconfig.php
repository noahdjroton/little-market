<?php

        try {
            // Connexion à la db
            $db = new PDO('mysql:host=localhost;dbname=little-market', 'root', 'djroton');
            $db->exec('SET NAMES "UTF8"');
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die();
        }
