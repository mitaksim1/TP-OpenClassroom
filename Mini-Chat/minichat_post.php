<?php
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Chat post</title>
</head>
<body>
    <?php

        // Avant de commencer, j'avais créée la bdd chat dans phpMyAdmin

        // Connexion a la bdd
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
        }
        catch (Exception $error) 
        {
            die('Erreur : ' .$error->getMessage());
        }

        // Initialization des variables qui vont récupèrer les valeurs saisis dans les inputs
        $pseudo = $_POST['pseudo'];
        $message = $_POST['message'];

        // Vérification s'il y a biens des valeurs dans les inputs
        if (isset($pseudo) && isset($message)) {
            // Si ou, je prépare la requête pour insérer les valeurs dans la bdd
            $req = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(:pseudo, :message)');

            // J'exécute la requête
            $req->execute([
                'pseudo' => $pseudo,
                'message' => $message
            ]);

            header('Location: minichat.php');
        }
    ?>
</body>
</html>