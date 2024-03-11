<?php

require('Model/modele.php');


function LoginUser()
{
    if (isset($_SESSION["prenom"]) && isset($_SESSION["nom"])) {
        if (strcmp($_POST["prenom"], $_SESSION["prenom"]) === 0 && strcmp($_POST["nom"], $_SESSION["nom"]) === 0) {
            echo "Vous êtes déjà connecté " . $_SESSION["prenom"] . " " . $_SESSION["nom"];
            require("View/login.php");
        } else {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $_SESSION["prenom"] = $prenom;
            $_SESSION["nom"] = $nom;

            setcookie("nom", $nom, time() + 365 * 24 * 3600);
            setcookie("prenom", $prenom, time() + 365 * 24 * 3600);

            echo "Vos nouvelles informations de connexion ont été enregistrées. Bienvenue " . $_SESSION["prenom"] . " " . $_SESSION["nom"];
            require("View/login.php");
        }
    } else {
        if (isset($_POST["prenom"]) && isset($_POST["nom"])) {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $_SESSION["prenom"] = $prenom;
            $_SESSION["nom"] = $nom;

            setcookie("nom", $nom, time() + 365 * 24 * 3600);
            setcookie("prenom", $prenom, time() + 365 * 24 * 3600);

            echo "Bienvenue " . $_SESSION["prenom"] . " " . $_SESSION["nom"];
            require("View/login.php");
        }
    }
}
