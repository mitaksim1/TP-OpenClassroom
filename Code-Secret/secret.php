<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_POST['password']) && $_POST['password'] == "kangourou") { 
    ?>    
        <h1>Codes secrets</h1>
        <ul>
            <li>0123</li>
            <li>4567</li>
            <li>891011</li>
        </ul>
        <a href="formulaire.php">Revenir au formulaire</a>
    <?php
    } else {
        // Sinon on affiche un message d'erreur
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>

</body>
</html>