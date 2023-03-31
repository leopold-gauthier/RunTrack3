<?php
require("./inc/config.php");
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>

    <?php
    var_dump($_SESSION);

    if (isset($_SESSION['user'])) {

    ?>
    <?php
    } else {
    ?>
        <a href="inscription.php">S'inscrire</a>
        <a href="connexion.php">Connexion</a>
    <?php
    }
    ?>
</body>

</html>