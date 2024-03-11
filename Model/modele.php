<?php

function dbconnect()
{
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=ecomobil", "root", "root", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        return $bdd;
    } catch (Exception $e) {
        die("Erreur de connection à la base : " . $e->getMessage());
    }
}
