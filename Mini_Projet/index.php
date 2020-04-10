<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>connexion</title>
</head>
<header>
    <div>
        <img class="img-header" src="Images/logo-QuizzSA.png">
        <h3 class="label-header">Le plaisir de jouer</h3>
    </div>   
</header>
<body>
        <div class="connexion">
            <div class="label-login">
                <label class="label">Login Form</label>
            </div>
                <form  method="POST" action="connexion.php">
                        <input class="input-login" type="text" placeholder="Login">
                        <label class="login"><img class="icon-login"src="Images/Icônes/ic-login.png"></label>
                        <input class="input-password" type="password" placeholder="Password">
                        <label class="password"><img class="icon-password" src="Images/Icônes/ic-password.png"></label>
                        <input class="btn-connexion" type="button" name="connexion" type="button" value="Connexion">
                        <a class="lien-inscri" href="index1.php"><strong>S'inscrire pour jouer?</strong></a>
                </form>
        </div>
</body>
</html>