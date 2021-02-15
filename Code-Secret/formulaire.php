<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!isset($_POST['password']) || $_POST['password'] == null) {
    ?>
    <form action="formulaire.php" method="post">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password">
        <button>Valider</button>
    </form> 
    <?php
    } else if ($_POST['password'] != 'kangourou') {
        echo '<p>Mot de passe incorrect</p>';
    ?>
    <?php  
    } else {
    ?>
        <h1>Codes secrets</h1>
        <ul>mitaksim@rock
            <li>0123</li>
            <li>4567</li>
            <li>891011</li>
        </ul>
    <?php
    } 
    ?>
</body>
</html>