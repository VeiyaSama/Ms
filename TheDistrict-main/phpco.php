<?php
// Établir la connexion à la base de données
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=DBSite', 'root', '#M6d122@');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>