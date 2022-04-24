<?php require("actions/Users/SecurityAction.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>

<body>
    <nav class="top-nav">
        <div><?php echo "".$_SESSION['username']."";?></div>
    </nav>
    <a href="actions/Users/LogoutAction.php" style="margin: 10px; color: rgb(0, 128, 255); text-decoration: none;">logout ?</a>

</body>
<style>
    .top-nav {
        background-color: rgb(0, 128, 255);
        height: 50px;
        width: 100%;
        position: fixed;
        top: 0;
    }
</style>

</html>