<?php  require('config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Se conneter</title>
</head>
<body>
    <section class="container-connexion">
        <article class="divider"></article>
        <article class="heading">
            <h2>Se connecter</h2>
        </article>
        <form action="" method="post" id="connexion-form">
            <aside class="info-form pos-p">
                <input type="text" name="user" id="user" placeholder="Identifiant" class="pos" required>
            </aside>
            <aside class="info-form">
                <input type="email" name="email" id="email" placeholder="Email" class="pos" required>
            </aside>
            <aside class="info-form">
                <input type="password" name="password" id="password" placeholder="Mot de passe" class="pos" required> 
            <aside>
            <aside>
                <input type="submit" value="Se connecter" class="btn">
            </aside>
        </form> 
       p?>
</body>
</html>