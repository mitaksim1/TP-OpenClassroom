<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Chat</title>
</head>
<body>
    <form action="minichat_post.php" method="post">
        <div>
            <label for="chat">Pseudo</label>
            <input type="text" id="pseudo" name="pseudo" value="">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>     
        <button>Envoyer</button>
    </form>

    <?php
        // Connexion a la bdd
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
        }
        catch (Exception $error) 
        {
            die('Erreur : ' .$error->getMessage());
        }

        // Requête pour récupèrer les 10 derniers messages du plus récent aux plus anciens
        $reqChat = $bdd->query('SELECT pseudo, message FROM chat ORDER BY id DESC LIMIT 0, 10');

        while ($response = $reqChat->fetch()) {
            echo '<p><strong>' . htmlspecialchars($response['pseudo']) . '</strong> : ' . htmlspecialchars($response['message']) . '</p>';
        }

        $reqChat->closeCursor();
    ?>
</body>
</html>