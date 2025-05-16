<?php
    $host = "pgdb";
    $username = "pguser";
    $password = "pgpassword";
    $db = "pggestion_produits";

    // Connexion avec pdo mysql
    $db = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
?>