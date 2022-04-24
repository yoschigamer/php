<?php require("actions/Users/SecurityAction.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h1><?php echo "" . $_SESSION['username'] . ""; ?></h1>
    </form>
    <a href="actions/Users/LogoutAction.php" style="margin: 10px; color: rgb(0, 128, 255); text-decoration: none;">logout ?</a>

</body>

</html>