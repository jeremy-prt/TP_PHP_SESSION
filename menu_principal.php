<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
</head>

<body>
    <h1>Menu principal</h1>
    <p><a href="View/login.php">login</a></p>
    <?php
    if (isset($_SESSION["prenom"]) && isset($_SESSION["nom"])) {
        echo "Bienvenue " . $_SESSION["nom"] . " " . $_SESSION["prenom"];
    }
    ?>
</body>

</html>