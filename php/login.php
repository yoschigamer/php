<?php require('actions/Users/LoginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connectez-vous</title>
</head>

<body>
    <form class="register_login" method="POST">
        <img style="width: 300px;" src="img/dqsf.png" alt="logo" draggable="false">
        
        <article class="form_input">
            <input id="mail" type="text" placeholder="Exemple@mail.com" name="Mails">
            <input id="mdp" type="Password" placeholder="Mots de passe" name="Password" onfocusout=check_mdp()>
        </article>
        <button name="submit" id="submit" onclick="animation()">Login</button>
        <a href="./register.php" style="margin: 10px; color: rgb(0, 128, 255); text-decoration: none;">créer un compte ?</a>
    </form>

</body>

<script>
    /* function animation() { // fonction qui permet d'animer le bouton
        var button = document.getElementById('submit')
        button.style.width = "80px"
        button.innerHTML = `<div id="laoder" style="animation: laoding 1s linear infinite; position: absolute; width: 25px; height: 25px; border-radius: 50px; border-top: solid 5px white; border: solid 5px rgba(255, 255, 255, 0.171); display: flex; justify-content: center; align-items: center; border-top: solid 5px white;"></div>` // On ajoute un loader

        if (check_mail() == false && check_mdp() == false && check_username() == false) {
            button.style.width = "100px"
            button.style.backgroundColor = '#FF4747'
            button.innerHTML = `<img src="./img/uncheck.png" alt="" style="width: 40px;">`
        } // Si l'input contient @ et .com, on change le bouton en vert
        else {
            button.style.width = "100px"
            button.style.backgroundColor = '#88FF6A'
            button.innerHTML = `<img src="./img/check.png" alt="" style="width: 40px;">`
        } // Sinon on change le bouton en rouge

    } // On ajoute un loader */
</script>

</html>