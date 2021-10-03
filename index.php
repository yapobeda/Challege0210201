<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription</title>
</head>
<body> 
    <section class="container-inscription">
        <article class="divider"></article>
        <article class="heading">
            <h2>S'inscrire</h2>
        </article>
        <form action="traitement.php" method="post" id="inscription-form">
            <aside class="info-form pos-p">
                <input type="text" name="user" id="user" placeholder="Identifiant"  required>
                    <span class="text-smal-color">
                <input type="email" name="email" id="email" placeholder="Email" class="pos" required>
            </aside>
            <aside class="info-form">
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="pos" required>
            <aside>
            <aside class="info-form">
                <input type="text" name="nom" id="nom" placeholder="Nom" required>
                <input type="tel" name="telephone" id="telephone" placeholder="Téléphone" class="pos" required>
            <aside>
            <aside>
                <button type="submit" class="btn" name="btn">S'inscrire</button>
            </aside>
           
        </form> 
</body>
</html>