<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>Partie Joeurs</title>
</head>
<header>
<div>
        <img class="img-header" src="Images/logo-QuizzSA.png">
        <h3 class="label-header">Le plaisir de jouer</h3>
    </div>
</header>
<body>
    <?php
            $users = file_get_contents('json/users.json');
            $users = json_decode($users, true);
    ?>
<div class="sous-entete-joueur">
            <div class="profil_joueur">
            <img class="avatar_joueur" src="/../Images/avatar/<?php echo $_SESSION['profil']?>" alt=""/><br>
                <label class="label_identy"><?php echo $_SESSION['nom']?></label>
                <label class="label_identy"><?php echo $_SESSION['prenom']?></label>
            </div>
                <libelle class="libelle-sous-joueur">BIENVENU SUR LA PLATEFORME DE JEU DE QUIZZ <br>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</libelle>
                    <form method="POST" action="deconnexion.php">
                        <input class="btn-deconnexion-j" type="submit" name="deconnexion" value="deconnexion"/>
                    </form>
</div>
</body>
</html>