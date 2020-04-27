<?php
 session_start();
 require_once("pages/connexion.php")
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>Connexion</title>
</head>
<body>
<div class="connexion">
            <div class="label-login">
                <label class="label">Login Form</label>
            </div>
                <form  method="POST" action="" id="form-connexion">
                        <input class="input-login" error="error-1" type="text" name="login" placeholder="Login"/>
                        <label class="login"><img class="icon-login"src="Images/Icônes/ic-login.png"></label>
                        <div class="erreur" id="error-1"> </div>
                        <input class="input-password" error="error-2" type="password" name="password" placeholder="Password"/>
                        <label class="password"><img class="icon-password" src="Images/Icônes/ic-password.png"></label>
                        <div class="erreur" id="error-2"> </div>
                        <input class="btn-connexion" type="submit" name="connexion" value="Connexion"/>
                        <a class="lien-inscri" href="creation/creerjoueur.php"><strong>S'inscrire pour jouer?</strong></a>
                </form>
                <div class="erreur">
                        <?php if(isset($error)){ echo $error; }?>
                </div>
        </div>
</body>
<script type="text/javascript" src="js/quizz.js"></script>
</html>