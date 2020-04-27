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
            $users = file_get_contents('json/users.json');
            $users = json_decode($users, true);
    ?>
<div class="sous-entete-joueur">
            <div class="profil_joueur">
            <img class="avatar_joueur" src="../Images/avatar/<?php echo $_SESSION['profil']?>" alt=""/><br>
                <label class="label_identy"><?php echo $_SESSION['nom']?></label>
                <label class="label_identy"><?php echo $_SESSION['prenom']?></label>
            </div>
                <libelle class="libelle-sous-joueur">BIENVENU SUR LA PLATEFORME DE JEU DE QUIZZ <br>JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERALE</libelle>
                    <form method="POST" action="../index.php">
                        <input class="btn-deconnexion-j" type="submit" name="deconnexion" value="deconnexion"/>
                    </form>
</div>
<div class="interface-joueur">
        <div class="menu-jeux">
            <div class="titre-question">
                <label class="label-joueur" for="">Question 1/5:</label><br>
                <label class="label-joueur" for=""> Les Langages web</label>
            </div>
            <div  class="question">
                    <input type="checkbox" name="" id="">
                    <label for="male">HTML</label><br>
                    <input type="checkbox" name="" id="">
                    <label for="male">R</label><br>
                    <input type="checkbox" name="" id="">
                    <label for="male">Java</label>
            </div>
            <div class="div-btn">
                <input class="btn-precedent" type="button" value="Precedent">
                <input class="btn-suivant" type="button" value="Suivant">
            </div>
            
        </div>
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
            }
        }
    ?>
</div>
</body>
</html>