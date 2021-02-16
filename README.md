# TP OpenClassroom

## TP 1 : Page protégée par mot de passe

### Objectif :

Accèder à une page qui contient des données "confidentielles" grâce à un mot de passe pré-défini.

- Si le mot de passe est correct, on sera redirigé vers cette page.

- Si le mot de passe est incorrect, on aura un message nous le signalant.

- Si le champ du mot de passe est nul/vide, on reste sur la page du formulaire.

### Procédure

- formulaire.php : contient un simple formulaire.

- secret.php : contient les données "confidentielles" mais ne les affiche que si on donne le bon motde passe.

## TP 2 : Mini chat

### Objectifs:

On souhaite avoir sur la même page, deux zones de texte :

1. Un formulaire avec un champ pseudo, un champ pour les messages et un bouton qui va envoyer ces informations à la base de données.

2. En dessous du formulaire, le script devra afficher les 10 derniers messages qui on été enregistrés, en allant du plus récent au plus ancien.

### Structure de la table MySQL

| id | pseudo | message |
| ---- | :------: |:----: |
| 1 | Tom | Il fait beau ! |
| 2 | Ana | Il fait beau ! |
| 3 | Charles | Il fait beau ! |


Champ ID : type INT, PRIMARY, auto_increment

Champ pseudo : type VARCHAR, taille maximale du champ 255

Champ message : type VARCHAR, taille maximale 255 OU text si on pense que le message sera plus long.

### Structure de la page PHP de

- minichat.php : contient le formulaire permettant d'ajouter un message et liste le 10 derniers messages.

- minichat_post.php : insère le message reçu ave $_POST dans la base de données, puis redirige vers minichat.php.

Pour la redirection utiliser :

```
<?php
    header('Location: mibichat.php');
?>
```

#### Rappel sur les consignes de sécurité

Ne jamais faire confiance aux données envoyées par les utilisateurs, alors au moment de récupèrer ses données appeler htmlspecialchars().



