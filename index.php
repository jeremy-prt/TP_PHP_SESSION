<?php
/* Fichier index pour TP_SIO2_1 migré vers le modèle  MVC */

require "Controller/controller.php";

session_start();





if (isset($_COOKIE["nom"]) && isset($_COOKIE["prenom"]) && empty($_SESSION["prenom"])) {
    $_SESSION["prenom"] = $_COOKIE["prenom"];
    $_SESSION["nom"] = $_COOKIE["nom"];
    echo "Content de vous revoir " . $_SESSION["nom"] . " " . $_SESSION["prenom"];
}

if (isset($_GET["action"])) {

    if ($_GET["action"] == "login") {
        LoginUser();
    }
} else {
    require "menu_principal.php";
}
