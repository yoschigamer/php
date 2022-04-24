<?php require('./actions/Users/RegisterAction.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/baloo-bhaina" rel="stylesheet">
    <script type="text/javascript" src="./script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Enregistrez-vous</title>
</head>

<body>
    <form class="register_login" method="POST">
        <img style="width: 300px;" src="img/dqsf.png" alt="logo" draggable="false">
        <article class="error_message" style="opacity: 0;">
            <p>Votre mots de passe doit contenir au moins 8 caractères, 1 majuscule, 1 minuscule,
                1 chiffre et 1 caractère spécial</p>
            <div class="error_message_arrow"></div>
        </article>
        <article class="form_input">
            <input id="username" type="text" placeholder="Username" name="Username">
            <input id="mdp" type="Password" placeholder="Mots de passe" name="Password" onfocusout=check_mdp()>
            <input id="mail" type="text" placeholder="Exemple@mail.com" name="Mails">
        </article>
        <button name="submit" id="submit" onclick="animation()">REGISTER</button>
        <a href="./login.php" style="margin: 10px; color: rgb(0, 128, 255); text-decoration: none;">Se connecter
            ?</a>
    </form>
</body>

</html>