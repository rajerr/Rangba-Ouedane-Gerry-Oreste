<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css<?php echo "?".rand(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
    <title>Partie Joeur</title>
</head>
<header>
<div>
        <img class="img-header" src="../Images/logo-QuizzSA.png">
        <h3 class="label-header">Le plaisir de jouer</h3>
    </div>
</header>
<body>
    <?php
            $users = file_get_contents('../json/users.json');
            $users = json_decode($users, true);

    ?>
<div class="sous-entete-joueur">
            <div class="profil_joueur">
            <img class="avatar_joueur" src="../Images/avatar/<?php echo $_SESSION['profil']?>" alt=""/><br>
                <label class="label_identy-j"><?php echo $_SESSION['nom']?></label>
                <label class="label_identy-j"><?php echo $_SESSION['prenom']?></label>
            </div>
                <libelle class="libelle-sous-joueur">BIENVENU SUR LA PLATEFORME DE JEU DE QUIZZ <br>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</libelle>
                    <form method="POST" action="../index.php">
                        <input class="btn-deconnexion-j" type="submit" name="deconnexion" value="deconnexion"/>
                    </form>
</div>
<div class="interface-joueur">
        <?php
        require_once('../pages/jouer.php');
        ?>
        <div class="score">
        <a  href="#"><a href="index2.php?p=top_score" class="label-decor"><input  class="btn-top-score" type="submit" value="Top Score"> </a>
        <a href="#"><a href="index2.php?p=meilleur_score" class="label-decor"><input  class="btn-m-score" type="submit" value="Meilleur Score"></a>

        
        </div>

        <?php
        if(isset($_GET['p'])){
            $m=$_GET['p'];
            if($m=="top_score"){
                include_once("../pages/top_score.php");
            }elseif($m=="meilleur_score"){
                include_once("../pages/meilleur_score.php");
            }elseif($m=="recapitulatif"){
                include_once("../pages/recapitulatif.php");
            }else{
                include_once("../pages/jouer.php");
            }
        }
    ?>
</div>
</body>
</html>